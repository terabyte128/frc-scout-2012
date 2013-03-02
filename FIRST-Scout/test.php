<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="jQuery Button, CheckBox, Toggle Button, Repeat Button, Radio Button, Link Button, Button" />
        <meta name="description" content="The jqxButton widget allows you to display a button on the Web page." />
        <title id='Description'>The jqxButton widget allows you to display a button on the Web
            page.</title>
        <script type="text/javascript" src="jqwidgets/scripts/gettheme.js"></script>
        <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
        <script type="text/javascript" src="jqwidgets/scripts/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    </head>
    <body class='default'>
        <div id='content'>
            <script type="text/javascript">
                $(document).ready(function () {
                    var theme = getDemoTheme();
                    // Create jqxButton widgets.
                    $("#jqxButton").jqxButton({ width: '150', theme: theme });
                    $("#jqxSubmitButton").jqxButton({ width: '150', theme: theme });
                    $("#jqxDisabledButton").jqxButton({ disabled: true, width: '150', theme: theme });
                    // Subscribe to Click events.
                    $("#jqxButton").on('click', function () {
                        $("#events").find('span').remove();
                        $("#events").append('<span>Button Clicked</span');
                    });
                    $("#jqxSubmitButton").on('click', function () {
                        $("#events").find('span').remove();
                        $("#events").append('<span>Submit Button Clicked</span');
                    });
                });
            </script>
            <div style='width: 150px;' id='jqxWidget'>
                <div>
                    <input type="button" value="Button" id='jqxButton' />
                </div>
                <div>
                    <input style='margin-top: 20px;' type="submit" value="Submit" id='jqxSubmitButton' />
                </div>
                <div>
                    <input style='margin-top: 20px;' type="Button" value="Disabled" id='jqxDisabledButton' />
                </div>
                <div style='font-size: 12px; font-family: Verdana; margin-top: 10px;'>
                    <div>Events:</div>
                    <div id='events'>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>