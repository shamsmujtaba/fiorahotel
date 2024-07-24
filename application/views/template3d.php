<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <link rel="icon" type="image/x-icon" href="<?= asset_url() ?>images/favicon.png">
    <meta property="og:image" content="<?= asset_url() ?>images/new-logo.png" />
    <style>
        body {
            margin: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        #panorama-container {
            flex: 1;
            position: relative;
        }

        #thumbnails {
            display: flex;
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            justify-content: center;
        }

        .thumbnail {
            width: 60px;
            /* Adjust thumbnail size as needed */
            height: 40px;
            /* Adjust thumbnail size as needed */
            margin: 5px;
            cursor: pointer;
        }

        .thumbnail:hover {
            border: 2px solid #007bff;
        }

        /* Styles for the loader */
        #loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #loader-content {
            background-image: url("<?= asset_url() ?>3d/loader.gif");
            /* Path to your loader GIF */
            background-size: 50px;
            /* Adjust the size as needed */
            background-repeat: no-repeat;
            width: 100%;
            /* 100% width to ensure centering */
            height: 100%;
            /* 100% height to ensure centering */
            background-position: center;
            /* Center the loader image */
        }

        #home-button {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #d49136;
            background: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1;
        }

        #home-button:hover {
            color: #d49136;
            background: #fff;
        }
    </style>

</head>

<body>

    <?php
    //  $this->load->view('header');
    ?>
    <?= $content ?>
    <?php
    // $this->load->view('footer'); 
    ?>



    <!-- $footer -->

    <!--Footer-->
    <script>
        var base_url = '<?= base_url(); ?>';
    </script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/controls/OrbitControls.js"></script>
    <script src="<?= asset_url() ?>3d/js/panorama.js"></script>
</body>

</html>