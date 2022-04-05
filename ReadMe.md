# cli-img-uploader
Welcome to the cli-img-uploader Symfony 5 based app!

This app allows you upload/remove image via CLI :100:

# **Project installation:**
Clone the project and install the dependencies using composer via:

`composer install`


# **Image Upload & Remove**
1. To upload an image you have to enter the following command line:

`php bin/console app:upload-img `

Then you will be asked to enter an absolute path to a local image and hit **Enter**.

2. To remove an image from your server you need the following command line:

`php bin/console app:remove-img`

You will also be asked to enter an image name including its extension then hit **Enter**
