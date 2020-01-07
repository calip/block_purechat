<?php
/**
 * purechat - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * Pure Chat is the preferred live chat solution for small to mid-sized teams
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package purechat
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/block_purechat
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($website_id): ?>
    <script type='text/javascript' data-cfasync='false'>
    window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { 
        var done = false; 
        var script = document.createElement('script'); 
        script.async = true; 
        script.type = 'text/javascript'; 
        script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; 
        document.getElementsByTagName('HEAD').item(0).appendChild(script); 
        script.onreadystatechange = script.onload = function (e) { 
            if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { 
                var w = new PCWidget({c: '<?= ___h($website_id) ?>', f: true }); 
                done = true; 
            } 
        }; 
    })();
    </script>
<?php else: ?>
    <!-- NOTE - Website ID was not set up correctly - please add Website ID -->
    <script>console.error("Website ID has not been set from configuration");</script>
<?php endif ?>