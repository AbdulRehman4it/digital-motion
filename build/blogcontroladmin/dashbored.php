<?php
require_once('./inc/db.php'); // Ensure this points to your database connection file

// Track today's visit
$current_date = date('Y-m-d');

// Check if today's visit already exists
$query_check = "SELECT * FROM visit_statistics WHERE visit_date = :visit_date";
$stmt_check = $conn->prepare($query_check);
$stmt_check->execute(['visit_date' => $current_date]);

// Update or insert the visit count
if ($stmt_check->rowCount() > 0) {
    $query_update = "UPDATE visit_statistics SET visit_count = visit_count + 1 WHERE visit_date = :visit_date";
    $stmt_update = $conn->prepare($query_update);
    $stmt_update->execute(['visit_date' => $current_date]);
} else {
    $query_insert = "INSERT INTO visit_statistics (visit_date, visit_count) VALUES (:visit_date, 1)";
    $stmt_insert = $conn->prepare($query_insert);
    $stmt_insert->execute(['visit_date' => $current_date]);
}

// Fetch visit data for the graph
$query_visits = "SELECT visit_date, visit_count FROM visit_statistics ORDER BY visit_date ASC";
$stmt_visits = $conn->query($query_visits);
$visit_data = $stmt_visits->fetchAll(PDO::FETCH_ASSOC);

// Prepare data for JavaScript
$labels = [];
$counts = [];

foreach ($visit_data as $visit) {
    $labels[] = $visit['visit_date'];
    $counts[] = $visit['visit_count'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Visits Chart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        canvas {
            border: 1px solid #ccc;
            margin-top: 20px;
        }
        .label {
            position: absolute;
            background: #333;
            color: white;
            padding: 5px;
            border-radius: 3px;
            display: none;
        }
    </style>
</head>
<body>

    <h1>Dynamic Visits Chart</h1>

    <!-- Chart canvas -->
    <canvas id="c" width="700" height="350"></canvas>

    <!-- Label for displaying data point information -->
    <div class="label"></div>

    <script>
        // Pass PHP data to JavaScript
        var oData = <?= json_encode($oData); ?>;
        
        var label = document.querySelector(".label");
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");
        var cw = c.width = 700;
        var ch = c.height = 350;
        var cx = cw / 2,
            cy = ch / 2;
        var rad = Math.PI / 180;
        var frames = 0;

        ctx.lineWidth = 1;
        ctx.strokeStyle = "#999";
        ctx.fillStyle = "#ccc";
        ctx.font = "14px monospace";

        var grd = ctx.createLinearGradient(0, 0, 0, cy);
        grd.addColorStop(0, "hsla(167,72%,60%,1)");
        grd.addColorStop(1, "hsla(167,72%,60%,0)");

        // JavaScript processes the PHP data
        var valuesRy = [];
        var propsRy = [];
        for (var prop in oData) {
            valuesRy.push(oData[prop]);  // Y-axis values (visit counts)
            propsRy.push(prop);  // X-axis labels (dates)
        }

        var vData = 4;  // Number of Y-axis divisions
        var hData = valuesRy.length;
        var offset = 50.5; // Offset for chart axis
        var chartHeight = ch - 2 * offset;
        var chartWidth = cw - 2 * offset;
        var t = 1 / 7; // Curvature
        var speed = 2; // Speed for animation

        var A = { x: offset, y: offset };
        var B = { x: offset, y: offset + chartHeight };
        var C = { x: offset + chartWidth, y: offset + chartHeight };

        // Draw chart axis
        ctx.beginPath();
        ctx.moveTo(A.x, A.y);
        ctx.lineTo(B.x, B.y);
        ctx.lineTo(C.x, C.y);
        ctx.stroke();

        // Vertical axis (Y-axis)
        var aStep = (chartHeight - 50) / vData;
        var Max = Math.ceil(Math.max(...valuesRy) / 10) * 10;
        var Min = Math.floor(Math.min(...valuesRy) / 10) * 10;
        var aStepValue = (Max - Min) / vData;
        var verticalUnit = aStep / aStepValue;

        var a = [];
        ctx.textAlign = "right";
        ctx.textBaseline = "middle";
        for (var i = 0; i <= vData; i++) {
            if (i == 0) {
                a[i] = { x: A.x, y: A.y + 25, val: Max };
            } else {
                a[i] = { x: A.x, y: a[i - 1].y + aStep, val: a[i - 1].val - aStepValue };
            }
            drawCoords(a[i], 3, 0);
        }

        // Horizontal axis (X-axis)
        var b = [];
        ctx.textAlign = "center";
        ctx.textBaseline = "hanging";
        var bStep = chartWidth / (hData + 1);

        for (var i = 0; i < hData; i++) {
            if (i == 0) {
                b[i] = { x: B.x + bStep, y: B.y, val: propsRy[0] };
            } else {
                b[i] = { x: b[i - 1].x + bStep, y: B.y, val: propsRy[i] };
            }
            drawCoords(b[i], 0, 3);
        }

        // Draw coordinates
        function drawCoords(o, offX, offY) {
            ctx.beginPath();
            ctx.moveTo(o.x - offX, o.y - offY);
            ctx.lineTo(o.x + offX, o.y + offY);
            ctx.stroke();
            ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
        }

        // Data points
        var oDots = [];
        var oFlat = [];
        for (var i = 0; i < hData; i++) {
            oDots[i] = { x: b[i].x, y: b[i].y - oData[b[i].val] * verticalUnit - 25, val: oData[b[i].val] };
            oFlat[i] = { x: b[i].x, y: B.y - 25 };
        }

        // Animate chart
        function animateChart() {
            requestId = window.requestAnimationFrame(animateChart);
            frames += speed;
            ctx.clearRect(60, 0, cw, ch - 60);

            for (var i = 0; i < oFlat.length; i++) {
                if (oFlat[i].y > oDots[i].y) {
                    oFlat[i].y -= speed;
                }
            }

            drawCurve(oFlat);

            for (var i = 0; i < oFlat.length; i++) {
                ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
                ctx.beginPath();
                ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
                ctx.fill();
            }

            if (frames >= Max * verticalUnit) {
                window.cancelAnimationFrame(requestId);
            }
        }
        requestId = window.requestAnimationFrame(animateChart);

        // Draw smooth curves
        function drawCurve(p) {
            var pc = controlPoints(p);
            ctx.beginPath();
            ctx.lineTo(p[0].x, p[0].y);
            ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

            if (p.length > 2) {
                for (var i = 1; i < p.length - 2; i++) {
                    ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
                }
                var n = p.length - 1;
                ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n].y);
            }
            ctx.stroke();
        }

        // Calculate control points for smooth curves
        function controlPoints(p) {
            var pc = [];
            for (var i = 1; i < p.length - 1; i++) {
                var dx = p[i - 1].x - p[i + 1].x;
                var dy = p[i - 1].y - p[i + 1].y;
                var x1 = p[i].x - dx * t;
                var y1 = p[i].y - dy * t;
                pc[i] = [{ x: x1, y: y1 }, { x: x1 + dx * t, y: y1 + dy * t }];
            }
            return pc;
        }
    </script>
</body>
</html>