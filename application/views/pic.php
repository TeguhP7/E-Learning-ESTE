<!DOCTYPE html>
<html lang="en">

<head>
    <title>ESTE - Fun & Learn</title>
    <meta charset="UTF-8">
    <meta name="description" content="ESTE - Fun & Learn">
    <meta name="keywords" content="este, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.png" rel="shortcut icon" />
    <base href="<?= base_url('assets/css'); ?> ">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <h2>List of Pictures</h2>
    <?php if (count($picture_list)) { ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($picture_list as $pic) : ?>
                    <tr>
                        <td><?= $pic->pic_title; ?></td>
                        <td><?= $pic->pic_desc; ?></td>
                        <td>
                            <a href="<?= base_url() . 'assets/uploads/' . $pic->pic_file; ?>" target="_blank">
                                download
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br />
        <a href="<?= base_url() . 'upload/form'; ?>" class="btn btn-primary">Upload More</a>
    <?php } else { ?>
        <h4>No Pictures have been uploaded!. Click this button to
            <a href="<?= base_url() . 'upload/form'; ?>" class="btn btn-primary">upload</a>
        </h4>
    <?php } ?>
</body>

</html>