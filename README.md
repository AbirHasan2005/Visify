# Visify v1.8
Using this tool you can increase visitors in your blog. Just copy link and paste, enter number of visitors and wait for the process. Not acurate but most acurate. Recommanded for Termux only. But you can try in others. Now more improved.

## How to use:
- Setup:
Download and install `php` and `git` package.
	- In Termux install via `pkg install php git -y` command.
	- In Kali/Dabian/Ubuntu install via `sudo apt-get install php git -y` command.
	- In Arch Linux install via `sudo pacman install -Sy php git` command.
	- In Windows install PHP and git by searching in Google ;) or install Ubuntu in Windows by typing `bash` command in Command Prompt/PowerShell. It will install Ubuntu in your Windows. But remember to enable ***Windows Subsystem for Linux (Beta)*** in *Windows Features* first. Okay watch a video on YouTube.

- Download Visify and run via the below command:
	- `git clone https://github.com/AbirHasan2005/Visify && cd Visify && php visify.php`
	- Paste this command in Command Line.

- Enter URL/Link of your blog/Post/Website/GitHub Repo
	- Just get a link it will auto visit that link ;)

- Enter Number of Visitors
	- Don't try to get all views at once. Don't get much. Keep under 2000. Keep it under period. Else you will lose most of the views.

- Wait till the process Ends
	- Play any game bro ;)
	- Or do your other hackings ;)
	- Just wait ...

- Join Telegram Group: http://t.me/linux_repo
	- Join Telegram Group for feedback, chat, help and more. Chat with me there. Learn more.

## Follow on:
### Github: https://github.com/AbirHasan2005
### Twitter: https://twitter.com/AbirHasan2005
### Facebook: https://facebook.com/AbirHasan2005
### Instagram: https://instagram.com/AbirHasan2005

---

## Donate me and become a VIP User:

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://paypal.me/AbirHasan2005)

---

### Codes:

```php
<?php
# This was coded by @AbirHasan2005
# If you use any codes from here must give me credits.
# Main GitHub Repo: https://github.com/AbirHasan2005/Visify
# Telegram Group: http://t.me/linux_repo
# Read REDAME.md

$version = "1.8";

$blue = "\e[34m";
$yellow = "\e[33m";
$cyan = "\e[96m";
$violet = "\e[35m";
$green = "\e[92m";
$red = "\e[91m";


# Welcome message:

echo "\n\n";
echo "$cyan __     ___     _  __
 \ \   / (_)___(_)/ _|_   _
  \ \ / /| / __| | |_| | | |
   \ V / | \__ \ |  _| |_| |
    \_/  |_|___/_|_|  \__, |
                      |___/ $blue v$version \n\n";

echo "$green Coded by$violet @AbirHasan2005 \n\n ";
# echo "$red Please Wait ... ";
# echo file_get_contents("https://pastebin.com/raw/k4qabq9K");
echo " \n";
echo "$green GitHub:$cyan https://github.com/AbirHasan2005/Visify \n";
echo "$green Telegram Group:$cyan http://t.me/linux_repo \n";
echo " \n \n";
echo "$cyan ========= AUTO VISITOR =========\n";
echo "$violet       (Traffic Generator)\n\n\n";
echo "$yellow Enter Link:$cyan ";
$url = trim(fgets(STDIN));
echo "$yellow Number of Visitors:$cyan ";
$max = trim(fgets(STDIN));

error_reporting(0);
class Random_UA
 {
    
    /**
     * 
     */ 
    var $linux_proc;
    /**
     * 
     */
    var $mac_proc;
    
    /**
     * A
     */
    var $lang;
    
    function __construct()
    {
        $this->linux_proc = array(
            'i686',
            'x86_64'
        );
        
        $this->mac_proc = array(
            'Intel',
            'PPC',
            'U; Intel',
            'U; PPC'
        );
        
        $this->lang = array(
            'en-US',
            'sl-SI'
        );
    }
    
    function firefox() {
        $ver = array(
    	'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), mktime())) . ' Firefox/' . rand(5, 7) . '.0',
    	'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), mktime())) . ' Firefox/' . rand(5, 7) . '.0.1',
    	'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), mktime())) . ' Firefox/3.6.' . rand(1, 20),
    	'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), mktime())) . ' Firefox/3.8'
        );
    
        $platforms = array(
    	'(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; ' . $this->lang[array_rand($this->lang, 1)] . '; rv:1.9.' . rand(0, 2) . '.20) ' . $ver[array_rand($ver, 1)],
    	'(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; rv:' . rand(5, 7) . '.0) ' . $ver[array_rand($ver, 1)],
    	'(Macintosh; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0) ' . $ver[array_rand($ver, 1)]
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function safari() {
        $saf = rand(531, 535) . '.' . rand(1, 50) . '.' . rand(1, 7);
        if (rand(0, 1) == 0) {
    	$ver = rand(4, 5) . '.' . rand(0, 1);
        } else {
    	$ver = rand(4, 5) . '.0.' . rand(1, 5);
        }
    
        $platforms = array(
    	'(Windows; U; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
    	'(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
    	'(iPod; U; CPU iPhone OS ' . rand(3, 4) . '_' . rand(0, 3) . ' like Mac OS X; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/" . rand(3, 4) . ".0.5 Mobile/8B" . rand(111, 119) . " Safari/6$saf",
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function iexplorer() {
        $ie_extra = array(
    	'',
    	'; .NET CLR 1.1.' . rand(4320, 4325) . '',
    	'; WOW64'
        );
        $platforms = array(
    	'(compatible; MSIE ' . rand(5, 9) . '.0; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; Trident/' . rand(3, 5) . '.' . rand(0, 1) . ')'
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function opera() {
        $op_extra = array(
    	'',
    	'; .NET CLR 1.1.' . rand(4320, 4325) . '',
    	'; WOW64'
        );
        $platforms = array(
    	'(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00',
    	'(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00'
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function chrome() {
        $saf = rand(531, 536) . rand(0, 2);
    
        $platforms = array(
    	'(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
    	'(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
    	'(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf"
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    /**
     * Main function which will choose random browser
     * @return string user agent
     */
    function generate() {
        $x = rand(1, 5);
        switch ($x) {
    	case 1:
    	    return "Mozilla/5.0 " . $this->firefox();
    	    break;
    	case 2:
    	    return "Mozilla/5.0 " . $this->safari();
    	    break;
    	case 3:
    	    return "Mozilla/" . rand(4, 5) . ".0 " . $this->iexplorer();
    	    break;
    	case 4:
    	    return "Opera/" . rand(8, 9) . '.' . rand(10, 99) . ' ' . $this->opera();
    	    break;
    	case 5:
    	    return 'Mozilla/5.0' . $this->chrome();
    	    break;
        }
    }
    
}

class autovisitor extends Random_UA {

	public function __construct($url) {
		$this->url = $url;
	}

	private function curl() {
		$ch = curl_init();
		CURL_SETOPT($ch, CURLOPT_URL, $this->url);
		CURL_SETOPT($ch, CURLOPT_HTTPHEADER, array('Referer: '.$this->acakReferer(),
												   'User-Agent: '.$this->generate()));
		CURL_SETOPT($ch, CURLOPT_FOLLOWLOCATION, true);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYHOST, 0);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYPEER, 0);
		CURL_SETOPT($ch, CURLOPT_RETURNTRANSFER, 1);
		CURL_SETOPT($ch, CURLOPT_USERAGENT, $this->generate());
		$result = curl_exec($ch);
		curl_close($ch);

		return $result;
	}

	private function xflush() {
    	static $output_handler = null;
    	if ($output_handler === null) {
        	$output_handler = @ini_get('output_handler');
    	}
    	if ($output_handler == 'ob_gzhandler') {
        	return;
    	}
    	flush();
    	if (function_exists('ob_flush') AND function_exists('ob_get_length') AND ob_get_length() !== false) {
       		@ob_flush();
    	} else if (function_exists('ob_end_flush') AND function_exists('ob_start') AND function_exists('ob_get_length') AND ob_get_length() !== FALSE) {
       		@ob_end_flush();
        	@ob_start();
    	}
	}

	private function acakReferer() {
		$list = array();
		/* Getting traffic from these sites */ 
		$list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://github.com/AbirHasan2005/Deskify";
        $list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://t.me/linux_repo";
        $list[] = "http://github.com/AbirHasan2005/CoronaStats";
        $list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://github.com/AbirHasan2005/ShellPhish";
        $list[] = "http://teletechstore.blogspot.com";
		$list[] = "http://facebook.com/AbirHasan2005";
        $list[] = "http://github.com/AbirHasan2005/Visify";
        $list[] = "http://teletechstore.blogspot.com";
		$list[] = "http://twitter.com/AbirHasan2005";
        $list[] = "http://github.com/AbirHasan2005/OPRecon";
        $list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://github.com/AbirHasan2005/LittleBrother";
        $list[] = "http://teletechstore.blogspot.com";
	    $list[] = "http://twitter.com/AbirHasan2005";
        $list[] = "http://github.com/AbirHasan2005/PowerLevel10K";
        $list[] = "http://teletechstore.blogspot.com";
	    $list[] = "https://teletechstore.blogspot.com";
        $list[] = "http://instagram.com/AbirHasan2005";
        $list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://github.com/AbirHasan2005";
        $list[] = "http://twitter.com/AbirHasan2005";
        $list[] = "http://teletechstore.blogspot.com";
        $list[] = "http://t.me/linux_repo";
        $list[] = "http://facebook.com/AbirHasan2005";


		$acak = array_rand($list,1);
		return $list[$acak];
	}

	public function jalankan() {
		$this->xflush();

		$this->curl();
		return $this->acakReferer(); 

		$this->xflush();
	}

} 

for($i = 1; $i < $max+1; $i++) {
	$class = new autovisitor($url);
	echo $i."Getting Visitor From - ".$class->jalankan()."\n";
}

echo "$green Don't forget to
$green Join Telegram Group for feedback and help:$cyan http://t.me/linux_repo \n\n";
?>
```

### If you find any problem in the codes than please report in my Telegram Group: http://t.me/linux_repo