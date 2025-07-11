[![Packagist](https://img.shields.io/packagist/v/cytracon/module-file-allowed.svg)](https://packagist.org/packages/cytracon/module-file-allowed) [![Packagist](https://img.shields.io/packagist/dt/cytracon/module-file-allowed.svg)](https://packagist.org/packages/cytracon/module-file-allowed)

# Upload SVG and WebP images in Magento 2

This extension for Magento 2 allows uploading SVG and WebP images in the following sections:
* Page Builder editor
* Wysiwyg editor
* Theme logo and favicon
* Product media gallery
* Attribute option swatch images
* Category image
* Custom image uploader fields

**IMPORTANT:** *if you need to upload any other image format or you need to upload it in any other Magento 2 area - please just drop us a line at [alex@cytracon.com](mailto:alex@cytracon.com?subject=Extend%20Cytracon_FileAllowed%20extension) and we will update the extension*

**IMPORTANT:** *if you like the extension, could you please add a star to this GitHub repository in the top right corner. This is really important for us. Thanks.*

## Magento Version Compatibility
| Supported Magento Version | Compatible Module Version |
|---------------------------|---------------------------|
| 2.4.7                     | 1.2.*                     |
| 2.4.6                     | 1.1.*                     |
| 2.4.5                     | 1.1.*                     |
| 2.4.4 or older            | Not supported             |

## Installation

### Using Composer (recommended)
1) Go to your Magento root folder
2) Download the extension using composer:

    *For Magento 2.4.7 or newer:*
    ```
    composer require cytracon/module-file-allowed
    ```
   *For Magento 2.4.5 or 2.4.6:*
    ```
    composer require cytracon/module-file-allowed:^1.1
    ```
3) Run setup commands:

    ```
    php bin/magento setup:upgrade;
    php bin/magento setup:di:compile;
    php bin/magento setup:static-content:deploy -f;
    ```
   
### Manually
1) Go to your Magento root folder:
    
    ```
    cd <magento_root>
    ```
   
2) Copy extension files to *app/code/MagestyApps/WebImages* folder:
    ```
    git clone https://github.com/MagestyApps/module-web-images.git app/code/MagestyApps/WebImages
    ```
    ***NOTE:*** *alternatively, you can manually create the folder and copy the extension files there.*
    
3) Run setup commands:

    ```
    php bin/magento setup:upgrade;
    php bin/magento setup:di:compile;
    php bin/magento setup:static-content:deploy -f;
    ```

### Possible issues
*Problem:* An image gets uploaded to the server but not accessible in browser.

*Solution:* Most likely, this is related to your nginx/apache restrictions. Please, make sure that the requested image extension is allowed by the web server configuration.
