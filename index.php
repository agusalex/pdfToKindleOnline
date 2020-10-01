<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>PDF to Kindle online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/css/uikit.min.css"/>
</head>
<body>
<?php
if (isset($_SESSION['message']) && $_SESSION['message']):
	?>
    <div class="uk-container">
        <div class="<?php echo($_SESSION['message'] === 'file converted!' ? 'uk-alert-success' : 'uk-alert-danger'); ?>"
             uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p><?php echo $_SESSION['message'] ?></p>
        </div>
    </div>
<?php
endif;
?>
<div class="uk-flex uk-flex-center uk-padding">
    <div class="uk-flex-column">
        <h1>PDF to Kindle online</h1>

		<?php
		if (isset($_SESSION['message']) && $_SESSION['message']):
			if ($_SESSION['message'] === 'file converted!'):
				?>
                <a href="download.php?name=output.pdf" class="uk-button uk-button-primary">Download file</a>
			<?php
			endif;
			?>
            <a href="/" class="uk-button uk-button-secondary">Upload new one</a>
		<?php
		else:
			?>
            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <div class="uk-margin">
                    <div uk-form-custom>
                        <input type="file" name="uploadedFile">
                        <button class="uk-button uk-button-default" type="button" tabindex="-1">Select file</button>
                    </div>
                </div>
                <div class="uk-margin">
                    <input class="uk-button uk-button-primary" type="submit" name="uploadBtn" value="Upload">
                </div>
            </form>
		<?php
		endif;
		?>
    </div>
</div>

<?php
unset($_SESSION['message']);
?>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit.min.js"></script>
</body>
</html>
