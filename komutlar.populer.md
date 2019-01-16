# Sık Kullanılan PHP Komutları

## Matematiksel

### ceil
$a = 789.89;
echo ceil($a); // 3

### floor
echo floor(4.3);   // 4
echo floor(9.999); // 9
echo floor(-3.14); // -4

###
###
###
###
###



## Dizge (String)

###
###
###
###
###
###

## Dizi
### count
###
###
###
###
###
###




## MySQL
###
###
###
###
###
###

## Genel
###
###
###
###
###
###
### empty
### die
### header
/* Örnek 1 */
header("Location: http://benimsitem.com/uyelik.php");
die();
/* Örnek 2 */
header("Content-Type: text/xml")
echo '<?xml version="1.0" encoding="ISO-8859-1" ?>';
/* Örnek 3 */
header('Content-Type: text/html; charset=utf-8');

### echo / print
### function_exists

## Dosya
###
###
###
###
###
###
### file_put_contents
/* Örnek 1 */
file_put_contents('my_file.txt', 'Hello', FILE_APPEND); // Will append 'Hello' to the specified file
/* Örnek 2 */
$ip = $_SERVER['REMOTE_ADDR']; // Get client's IP address
file_put_contents('ips.txt',"\n".$ip, FILE_APPEND);
### file_get_contents



