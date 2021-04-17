<script>
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    if(window.matchMedia('(prefers-color-scheme').media === 'not all' && getCookie('theme') !== 'dark') {
        var head = document.getElementsByTagName('HEAD')[0];
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = '/assets/style/lightstyle.css';
        head.appendChild(link);
    }
</script>

<?php if($theme === 'light'): ?>
    <link rel="stylesheet" href="/assets/style/lightStyle.css" type="text/css" />
<?php elseif($theme === 'dark'): ?>
    <link rel="stylesheet" href="/assets/style/darkStyle.css" type="text/css" />
<?php elseif(!$theme): ?>
    <link rel="stylesheet" href="/assets/style/darkStyle.css" type="text/css" media="(prefers-color-scheme: dark)" />
    <link rel="stylesheet" href="/assets/style/lightStyle.css" type="text/css" media="(prefers-color-scheme: light)" />
<?php endif; ?>