<?php

	error_reporting(E_ALL); ini_set('display_errors', 'on');
	$errors = array();
	$data	= array();

	if (empty($_POST['name']))
        $errors['name'] = 'Nombre obligatorio.';

    if (empty($_POST['title']))
        $errors['title'] = 'Titulo obligatorio.';

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;

    } else {

        // DO ALL YOUR PROCESSING HERE
    	$uuid = $_POST['uuid'];
    	$name = $_POST['name'];
    	$title = $_POST['title'];
    	$frase1_field = $_POST['frase1_field'];
    	$frase2_field = $_POST['frase2_field'];
    	$frase3_field = $_POST['frase3_field'];
    	$category = $_POST['frase1_category'];

    	$DISTRIBUTION_ID = "2ea30d8b-0dca-406d-beb1-a91cdc797d19";

    	//get video from camera tag and save to server at "/videos/"
    	$video_url = "https://www.cameratag.com/videos/".$uuid."/vga/mp4.mp4";

	   	$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $video_url);
		curl_setopt($ch, CURLOPT_HEADER, TRUE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$a = curl_exec($ch);
		
			if(preg_match('#Location: (.*)#', $a, $r)){
				$l = trim($r[1]);
				curl_close($ch);
			}
		 	
	    }
	    
	    //download video from camera tag service
	    function getVideo($url, $rename, $ch)
		{
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
			$rawdata=curl_exec ($ch);
			curl_close ($ch);
			$path = dirname(__DIR__);
			$fp = fopen($path . "/sally/videos/$rename.mp4",'w');
			fwrite($fp, $rawdata); 
			fclose($fp);  
			return true;           
		}

		$ch = curl_init();
		$video = $l;
		$random_string = generateRandomString();

		if(getVideo($video, $random_string , $ch)){

				$path = dirname(__DIR__);
				//upload video to impossible software
				$username = "434bee53c36633c0f27ed1ae7764c679be616b2e";
				$password = "14555c226cf05c5dcb04ec73a95af6aba92905ec";

				$file = fopen( $path. "/sally/videos/$random_string.mp4" , 'r');
				$is_url = 'https://api.impossible.io/v1/data/' . $DISTRIBUTION_ID . '/'.$random_string.'.mp4';

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_URL, $is_url );
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch, CURLOPT_USERPWD, $username.':'.$password );
				curl_setopt($ch, CURLOPT_PUT, true);
				curl_setopt($ch, CURLOPT_UPLOAD, true);
				curl_setopt($ch, CURLOPT_INFILE, $file );
				curl_setopt($ch, CURLOPT_INFILESIZE, filesize($path . "/sally/videos/$random_string.mp4"));

				$result = curl_exec($ch);
				fclose($file);
				$curl_error = curl_error($ch);
				
				//No upload error
				if(empty($curl_error)){	

					$path = dirname(__DIR__);

					$video_path = dirname(__DIR__)."/sally/videos/".$random_string.".mp4";

					$total_video_frames = exec("/usr/bin/ffprobe -i ".$video_path." -show_frames 2>&1|grep -c '^\[FRAME'");

					$total_video_frames = ($total_video_frames / 2) - 150 ;

					$frame_rate_distribution = ($total_video_frames + 320) / 5;

					$frame_rate_super_1 = $frame_rate_distribution;

					$frame_rate_super_2 = $frame_rate_super_1 + $frame_rate_distribution;

					$frame_rate_super_3 = $frame_rate_super_2 + $frame_rate_distribution;

					$framerate_super1 = round($frame_rate_super_1);

					$framerate_super2 = round($frame_rate_super_2);

					$framerate_super3 = round($frame_rate_super_3);

					
					//render with json
					$template = file_get_contents( $path.'/sally/template.json' );
					$search = array("__uuid__", "__name__", "__title__", "__frase1_field__", "__frase2_field__", "__frase3_field__","__framerate_super1__", "__framerate_super2__", "__framerate_super3__");
					$replace = array($random_string, $name, $title, $frase1_field, $frase2_field, $frase3_field, $framerate_super1, $framerate_super2, $framerate_super3);
					$template = str_replace($search, $replace , $template);

					file_put_contents( $path . "/sally/json/".$random_string.".json", $template );

					$file = fopen( $path. "/sally/json/".$random_string.".json" , "rb");
					$url = 'https://api.impossible.io/v1/sdl/' . $DISTRIBUTION_ID . '/'.$random_string;
					
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
					curl_setopt($ch, CURLOPT_URL, $url );
					curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
					curl_setopt($ch, CURLOPT_USERPWD, $username.':'.$password );
					curl_setopt($ch, CURLOPT_PUT, true);
					curl_setopt($ch, CURLOPT_UPLOAD, true);
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0); 
					curl_setopt($ch, CURLOPT_TIMEOUT, 500); 
					curl_setopt($ch, CURLOPT_INFILE, $file );
					curl_setopt($ch, CURLOPT_INFILESIZE, filesize($path . "/sally/json/$random_string.json"));

					
					$result = curl_exec($ch);
					fclose($file);
					$curl_error = curl_error($ch);

					if( empty( $curl_error ) ){
						
						//render ok
						$mp4 = "http://api.impossible.io/v1/render/".$DISTRIBUTION_ID."/".$random_string.".mp4";
						file_put_contents( $path."/sally/render/videos/".$random_string.'.mp4' ,  file_get_contents( $mp4  ) );

						$ch = curl_init($mp4);
						curl_setopt($ch, CURLOPT_HEADER, 0);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);

						curl_setopt($ch, CURLOPT_TIMEOUT, 900); 
						$rawdata=curl_exec ($ch);
						curl_close ($ch);
						$path = dirname(__DIR__);
						$fp = fopen($path."/sally/render/videos/".$random_string.'.mp4' ,'w');
						fwrite($fp, $rawdata); 
						fclose($fp); 


        				$jpg = "http://api.impossible.io/v1/render/".$DISTRIBUTION_ID."/".$random_string.".jpg?frame=500";
						file_put_contents( $path."/sally/render/img/".$random_string.'.jpg' ,  file_get_contents( $jpg  ) );

						$data['success'] = true;
						$data['video_url']  = $random_string.".mp4";
        				$data['img_url'] = $random_string.".jpg";

					}else{

						$errors['render_errors'] = $curl_error;
						$data['success'] = false;
        				$data['errors']  = $errors;
					}

				}else{

					//upload errors
					$errors['upload_errors'] = $curl_error;
					$data['success'] = false;
        			$data['errors']  = $errors;

				}

		}

		function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

    echo json_encode($data);


  
?>