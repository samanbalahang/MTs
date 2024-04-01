<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\Jdate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class HelperController extends Controller
{
   //
   public function stringDate(){
    return strval(date("Y-m-d"));
   }
  // ساخت ورودی مخفی
  public  function hidden($name = "user_id", $value = "1")
  {
      return "<input type='hidden' value='$value' name='$name' id='$name'>";
  }

  // ساخت پیام
  function result_msg($message = "done")
  {
      switch ($message) {
          case "done":
              return '<div class="alert alert-success alert-dismissible fade show d-flex justify-content-between px-2" role="alert">
              <div><strong>عملیات</strong> با موفقیت انجام شد.</div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>';
              break;
          case "error":
              return '<div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between px-2" role="alert">
              <div><strong>عملیات</strong> با خطا مواجه شد. لطفاً تیم پشتیبانی را مطلع کنید.</div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>';
              break;
          default:
              return "<div class='alert alert-info alert-dismissible fade show' role='alert'>
              <strong>
              خطا بازگشت</strong>
               <span>
               $message
               </span>
               <span>
                رخداده است.
               </span>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
              </button>
              </div>";
              break;
      }
  }

  // تبدیل زمان فارسی به تایم استامپ
  function faDateToTimestamp(string $string = "1400/01/01")
  {
      $Jdate = new Jdate();
      return $Jdate->persianStrToTime($string);
  }

  /**
   * چک کردن اتصال به بانک و بازگردانی آن بصورت یک آرایه
   *
   */
  public function checkConnection()
  {
      try {
          $dbconnect = DB::connection()->getPDO();
          $dbname = DB::connection()->getDatabaseName();
          $exportToApp = $this->makeExportJson();
          return $exportToApp;
      } catch (\PDOException $e) {
          $situation   = "False";
          $message     = "اتصال به بانک برقرار نیست";
          $data        = "";
          $exportToApp = $this->makeExportJson($situation, $message, $data);
          return $exportToApp;
      }
  }

  /*
    |
    |       اگر اتصال برقرار باشد
    |           OK
    |            در غیر این صورت
    |       False
    |            بر میگرداند
    */
  public function isDatabaseConected()
  {
      return $this->checkConnection()["situation"];
  }

  // ایجاد یک عدد تصادفی چهار رقمی
  public function createfourRandumDigit()
  {
      $rand = mt_rand(1000, 9999);
      return $rand;
  }

  public function checkboxoutput($data){
       switch($data){
            case "on":
                return 1;
            break;
            case "off":
                return 0;
            break;
            case null:
                return 0;
            break;
       }
  }
  /*------------------------------------------------------------------
  |                   createhash
  |                       ایجاد یک هش
  ----------------------------------------------------------------------
  |
  |  ایجاد هش برای چک کردن کاربر این هش برای رمز عبور کاربرد ندارد
  |
  |           هشدار برای رمز عبور استفاده نشود کار نخواهد کرد
  |
  |
  ---------------------------------------------------------------------*/
  public function createhash($baseString = "", $length = -1)
  {

      if ($baseString != "") {
          $hash = $this->clean(strval(Hash::make($baseString)));
      } else {
          $hash = $this->clean(strval(Hash::make()));
      }
      if($length != -1) {
          if (is_int($length)) {
              $hash = substr($hash,0, $length);
          }
      }
      return $hash;
  }


  // ایجاد هش پسورد
  public function createPasshash($baseString = "")
  {
      return  Hash::make($baseString);
  }

  // بررسی صحت یک هش
  public function checkHash($baseValue = "", $databasehash = "")
  {
      return Hash::check($baseValue, $databasehash);
  }

  // حذف کاراکتر های خاص از متن
  function clean($string)
  {
      $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
      return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
  }

  // تبدیل عکس 64 بیت به عکس معمولی
  function base64_to_jpeg($base64_string, $output_file, $photoname = "")
  {
      // تبدیل بیس 64 به عکس
      // open the output file for writing
      // split the string on commas
      // $data[ 0 ] == "data:image/png;base64"
      // $data[ 1 ] == <actual base64 string>
      $data = explode(',', $base64_string);
      $data = base64_decode($data[1]);
      $images = imageCreateFromString($data);
      if ($images  !== false) {
          header("Content-type: image/png");

          // imagepng($images);
          // return "hi";
          if (strpos(strval(public_path()), "\\") > 0) {
              $seprator = "\\";
          } else {
              $seprator = "/";
          }
          $photoAddress = $output_file . $seprator . $photoname . '.png';
          imagepng($images, $photoAddress);
          imagedestroy($images);
          if ($convert = $this->pngTojpg($photoAddress)) {
              unlink($photoAddress);
          }
      }

      return  $convert;
  }

  // ایجاد نام فایل
  public function imagefilename($length = 4)
  {
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[random_int(0, $charactersLength - 1)];
      }

      $randomString = trim(strval(date("Y-m-d"))) . "-" . trim($randomString);
      return trim($randomString);
  }

//   ایجاد پوشه در صورت عدم وجود.

public function createFolder($address = "/public/uploads"){
    if (!file_exists($address)) {
        mkdir($address, 0777, true);
    }
}

  /*
  | آیا ورودی جیسون است.
  */
  public function isJson($string)
  {
      json_decode($string);
      if (json_last_error() === JSON_ERROR_NONE) {
          return true;
      } else {
          return false;
      }
  }

  // تبدیل جیسون به شیئ
  public function jsonRequestToObj($request)
  {
      $a = $request->all();
      $data = response()->json(
          $request->all(),
          200,
          ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
          JSON_UNESCAPED_UNICODE
      );
      // $data = response()->json($request->all());
      $length = (strpos($data, "}") - strripos($data, "{")) + 1;
      $json = str_replace('\\', '', (strval(substr($data, strripos($data, "{"), $length))));
      if ($this->isJson($json)) {
          // return $json;
          $theobj = json_decode($json);
          // return  $theobj->postTypeId;
          return $theobj;
      } else {
          return ($this->isJson($json));
      }
  }

  // تبدیل عکس به حجم کمتر با فرمت درست
  public function pngTojpg($filePath = "/testimg/test.png")
  {
      // $filePath = public_path() . $filePath;
      $filePath = $filePath;
      $image = imagecreatefrompng($filePath);
      $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
      imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
      imagealphablending($bg, TRUE);
      imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
      imagedestroy($image);
      $quality = 100; // 0 = worst / smaller file, 100 = better / bigger file
      $filename = strval(substr(strval($filePath), 0, strpos($filePath, ".png")));
      if (imagejpeg($bg,  $filename . ".jpg", $quality)) {
          imagedestroy($bg);
          $export = $this->makeExportJson($situation = "OK", $message = "عکس در بانک ذخیره شد", $data = "$filePath");
          return $export;
      } else {
          imagedestroy($bg);
      }
  }

  // ساخت خروجی برای نمایش بصورت جیسون
  public function makeExportJson($situation = true, $message = "", $data = "")
  {
      if($message == ""){
          $message = $this->preTextMessages($situation);
      }
      $myarray = ['situation' => $situation, 'message' => $message, 'data' => $data];
      return $myarray;
  }

  // متن های از قبل آماده شده برای خروجی
  public function preTextMessages($situation = true){
      switch ($situation) {
          case true :
              return "عملیات با موفقیت انجام شد";
          break;
          case false:
              return "خطایی رخ داده است";
          break;

      }
  }


  /*
      آدرس صفحه را باز میگرداند
  */
  public function getPageUrl()
  {
      $url = trim(strval($_SERVER['REQUEST_URI']));
      //    dd($url[0]);
      $newurl = [];
      if (strripos($url, "/") != 0) {
          $url = explode("/", $url);
          foreach ($url as $item) {
              if ($item != "") {
                  array_push($newurl, $item);
              }
          }
      }
      return $newurl;
  }


  /*
    بخش های آدرس صفخه
  */
  public function urlpartCounts()
  {
      $url = $this->getPageUrl();
      if (is_array($url)) {
          $count = count($url);
      } else {
          $count = 0;
      }
      return  $count;
  }

  // آیا درخواست از سمت Api  است
  public function isapi()
  {
      if ($this->urlpartCounts() != 0) {
          $urlFirstpart = $this->getPageUrl()[1];
          if ($urlFirstpart == "api") {
              return true;
          } else {
              return false;
          }
      } else {
          return false;
      }
  }

  // ذخیره عکس در آدرس مد نظر
  public function saveMediaFile($request,$photo, $photoAddress)
  {
     $address = $photoAddress;

     if (!file_exists($photoAddress) && !is_dir($photoAddress)) {
        //   dd($photoAddress);
        //   $oldmask = umask(0);
        if (!file_exists($photoAddress)) {
            mkdir($photoAddress, 0777, true);
          }
        //   mkdir($photoAddress, 0777);
        //   umask($oldmask);
      }
      $file = $request[$photo];
    //   $file = $this->cropImage($request,$photo);
      $extension = $file->getClientOriginalExtension();
      $filename = $this->imagefilename().'.'.$extension;
      $file->move($photoAddress, $filename);
      $address =$address.$filename;
      return $address;
  }


  public function filecreator($address,$text){
    $content =$text;
    $fp = fopen($address,"wb");
    fwrite($fp,$content);
    fclose($fp);
  }
// بریدن عکس
public static function cropImage($request,$photo){
    // dd($request[$photo]);
    $imgSrc = $request[$photo];
    //getting the image dimensions
    list($width, $height) = getimagesize($imgSrc);
    //saving the image into memory (for manipulation with GD Library)
    $myImage = imagecreatefromjpeg($imgSrc);
    // calculating the part of the image to use for thumbnail
    if ($width > $height) {
    $y = 0;
    $x = ($width - $height) / 2;
    $smallestSide = $height;
    } else {
    $x = 0;
    $y = ($height - $width) / 2;
    $smallestSide = $width;
    }
    // copying the part into thumbnail
    $thumbSize = 100;
    $thumb = imagecreatetruecolor($thumbSize, $thumbSize);
    imagecopyresampled($thumb, $myImage, 0, 0, $x, $y, $thumbSize, $thumbSize, $smallestSide, $smallestSide);
    //final output
    header('Content-type: image/jpeg');
    return imagejpeg($thumb);
}


  /*------------------------------------------------------------------
  |                   ترجمه در گوگل ترنسلیت
  |
  ----------------------------------------------------------------------
  |
  |
  |
  |  شما میتوانید با کمک فانکشن های زیر متنی را در گوگل ترجمه کنید
  |
  |
  ---------------------------------------------------------------------*/

  public static function translate(string $source='en',string $target = 'fa',string $text="hi")
  {
      $response = self::requestTranslation($source, $target, $text);
      $translation = self::getSentencesFromJSON($response);
      return $translation;
  }

  protected static function requestTranslation($source, $target, $text)
  {
      $url = "https://translate.google.com/translate_a/single?client=at&dt=t&dt=ld&dt=qca&dt=rm&dt=bd&dj=1&hl=es-ES&ie=UTF-8&oe=UTF-8&inputm=2&otf=2&iid=1dd3b944-fa62-4b55-b330-74909a99969e";
      $fields = array(
          'sl' => urlencode($source),
          'tl' => urlencode($target),
          'q' => urlencode($text)
      );

      $fields_string = "";
      foreach ($fields as $key => $value) {
          $fields_string .= $key . '=' . $value . '&';
      }

      rtrim($fields_string, '&');
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, count($fields));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');

      $result = curl_exec($ch);

      curl_close($ch);
      return $result;
  }

  protected static function getSentencesFromJSON($json)
  {
      $sentencesArray = json_decode($json, true);
      $sentences = "";
      foreach ($sentencesArray["sentences"] as $s) {
          if(isset($s["trans"])){
              $sentences .= $s["trans"];

          }
      }
      return $sentences;
  }

// site map based on yoast
public function createsitemap(){
    $base = '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:html="http://www.w3.org/TR/REC-html40" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"><head><title>XML Sitemap</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
				body {
					font-family: Helvetica, Arial, sans-serif;
					font-size: 13px;
					color: #545353;
				}
				table {
					border: none;
					border-collapse: collapse;
				}
				#sitemap tr:nth-child(odd) td {
					background-color: #eee !important;
				}
				#sitemap tbody tr:hover td {
					background-color: #ccc;
				}
				#sitemap tbody tr:hover td, #sitemap tbody tr:hover td a {
					color: #000;
				}
				#content {
					margin: 0 auto;
					width: 1000px;
				}
				.expl {
					margin: 18px 3px;
					line-height: 1.2em;
				}
				.expl a {
					color: #da3114;
					font-weight: 600;
				}
				.expl a:visited {
					color: #da3114;
				}
				a {
					color: #000;
					text-decoration: none;
				}
				a:visited {
					color: #777;
				}
				a:hover {
					text-decoration: underline;
				}
				td {
					font-size:11px;
				}
				th {
					text-align:left;
					padding-right:30px;
					font-size:11px;
				}
				thead th {
					border-bottom: 1px solid #000;
				}
			</style></head><body><div id="content"><h1>XML Sitemap</h1><p class="expl">
				Generated by <a href="https://yoa.st/1y5" target="_blank" rel="noopener">Yoast SEO</a>, this is an XML Sitemap, meant for consumption by search engines.<br><br>
				You can find more information about XML sitemaps on <a href="https://sitemaps.org" target="_blank" rel="noopener">sitemaps.org</a>.
			</p><p class="expl">
					This XML Sitemap Index file contains 6 sitemaps.
				</p><table id="sitemap" cellpadding="3"><thead><tr><th width="75%">Sitemap</th><th width="25%">Last Modified</th></tr></thead><tbody><tr><td><a href="http://localhost/wordpress/post-sitemap.xml">http://localhost/wordpress/post-sitemap.xml</a></td><td>2024-03-30 14:53 +00:00</td></tr><tr><td><a href="http://localhost/wordpress/page-sitemap.xml">http://localhost/wordpress/page-sitemap.xml</a></td><td>2024-03-30 14:57 +00:00</td></tr><tr><td><a href="http://localhost/wordpress/product-sitemap.xml">http://localhost/wordpress/product-sitemap.xml</a></td><td>2024-03-30 15:01 +00:00</td></tr><tr><td><a href="http://localhost/wordpress/category-sitemap.xml">http://localhost/wordpress/category-sitemap.xml</a></td><td>2024-03-30 14:53 +00:00</td></tr><tr><td><a href="http://localhost/wordpress/product_cat-sitemap.xml">http://localhost/wordpress/product_cat-sitemap.xml</a></td><td>2024-03-30 15:01 +00:00</td></tr><tr><td><a href="http://localhost/wordpress/author-sitemap.xml">http://localhost/wordpress/author-sitemap.xml</a></td><td>2024-03-30 15:08 +00:00</td></tr></tbody></table></div></body></html>';
    $createxml = $this->filecreator("sitemap_index.xml",  $base);               
}

}

