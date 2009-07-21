
function sendDate(month, day, year) 
{
    // pad with blank zeros numbers under 10
    month = month < 10 ? '0' + month : month;
    day   = day   < 10 ? '0' + day   : day;

    var date = year + '-' + month + '-' + day;
    
    parent.document.location = 'thumbnails.php?album=datebrowse&date=' + date;
}
