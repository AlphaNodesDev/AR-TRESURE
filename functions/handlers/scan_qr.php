

<?php if(isset($_GET['question_id'])){

    $question_id = $_GET['question_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        #preview {
            object-fit: cover;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <video id="preview" playsinline autoplay></video>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
            var questionId = <?php echo json_encode($question_id); ?>;
            scanner.addListener('scan', function (content) {
                var url = '../check/qr_check.php?qr_code=' + encodeURIComponent(content) + '&&question_id=' + questionId;

                window.location.href = url;
            });

            Instascan.Camera.getCameras().then(function (cameras) {
                const backCameras = cameras.filter(camera => camera.name.includes('back'));
                if (backCameras.length > 0) {
                    scanner.start(backCameras[0]);
                } else {
                    alert('No back cameras found.');
                }
            }).catch(function (e) {
                console.error(e);
            });
        });
    </script>
</body>
</html>
