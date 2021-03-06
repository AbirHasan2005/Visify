<?php
# This was coded by @AbirHasan2005
# If you use any codes from here must give me credits.
# Main GitHub Repo: https://github.com/AbirHasan2005/Visify
# Telegram Group: http://t.me/linux_repo
# Read REDAME.md

$version = "2.1";   # Change version from here

$blue = "\e[34m";   # Color
$yellow = "\e[33m"; # Color 
$cyan = "\e[96m";   # Color
$violet = "\e[35m"; # Color
$green = "\e[92m";  # Color
$red = "\e[91m";    # Color

echo "\n\n";
echo "$cyan __     ___     _  __
 \ \   / (_)___(_)/ _|_   _
  \ \ / /| / __| | |_| | | |
   \ V / | \__ \ |  _| |_| |
    \_/  |_|___/_|_|  \__, |
                      |___/ $blue v$version \n\n";  # Logo

echo "$green Coded by$violet @AbirHasan2005 \n\n "; # By Tag
# echo "$red Please Wait ... ";                                 # Locked because no need of this ...
# echo file_get_contents("https://pastebin.com/raw/k4qabq9K");  # Locked because no need of this ...
echo " \n";
echo "$green GitHub:$cyan https://github.com/AbirHasan2005/Visify \n"; # Link
echo "$green Telegram Group:$cyan http://t.me/linux_repo \n";          # Link
echo " \n \n";
echo "$cyan ========= AUTO VISITOR =========\n";
echo "$violet       (Traffic Generator)\n\n\n";
echo "$yellow Enter Link:$cyan ";         # Input
$url = trim(fgets(STDIN));                # Get input
echo "$yellow Number of Visitors:$cyan "; # Input
$max = trim(fgets(STDIN));                # Get input

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
        $list[] = "http://t.me/linux_repo";
        $list[] = "http://facebook.com/AbirHasan2005";
        $list[] = "http://instagram.com/AbirHasan2005";
        $list[] = "http://twitter.com/AbirHasan2005";
        $list[] = "http://github.com/AbirHasan2005";
        $list[] = "http://github.com/AbirHasan2005/Visify";
        $list[] = "http://github.com/AbirHasan2005/OPRecon";
        $list[] = "http://github.com/AbirHasan2005/LittleBrother";
        $list[] = "http://github.com/AbirHasan2005/PowerLevel10K";
        $list[] = "http://github.com/AbirHasan2005/Deskify";
        $list[] = "http://github.com/AbirHasan2005/CoronaStats";
        $list[] = "http://github.com/AbirHasan2005/ShellPhish";
        $list[] = "http://github.com/AbirHasan2005/YouTube_Views_Bot";
        $list[] = "http://github.com/AbirHasan2005/RepoHub";
        $list[] = "http://github.com/AbirHasan2005/fsociety";
        $list[] = "http://github.com/AbirHasan2005/TelegramScraper";
        $list[] = "http://github.com/AbirHasan2005/PySnakeGame";
        $list[] = "http://github.com/AbirHasan2005/TG_UseBot_Plugins";


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
	echo $i.". Getting Visitor From - ".$class->jalankan()."\n"; # Informations while getting traffic
}

echo "$green Don't forget to
$green Join Telegram Group for feedback and help:$cyan http://t.me/linux_repo \n\n"; # Last message
?>
