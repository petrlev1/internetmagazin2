<!--
function open_print_popup(url, width, height, winname) {
        var old = self;
        //var trails="width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=no,scrollbars=no,resize=no,menubar=no";
        var trails="width=" + width + ",height=" + height + ",toolbar=yes,location=no,status=yes,scrollbars=yes,resizable=yes,left=0,top=0";
        newWindow=window.open(url,winname,trails);
        newWindow.focus();
        return false;
        }
//-->