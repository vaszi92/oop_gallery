<?php

function strip_zeros_from_date($marked_string=""){
	//first remove the marked zeros
	$no_zeros = str_replace('*0', '', $marked_string);
	//then remove any remaining marks
	$cleaned_string = str_replace('*', '', $no_zeros);
	return $cleaned_string;
}

function redirect_to($location=NULL){
	if($location!=NULL){
		header("Location: {$location}");
		exit;
	}
}

function output_message($message=""){
	if(!empty($message)){
		return "<p class=\"message\">{$message}</p>";
	} else {
		return "";
	}
}

function __autoload($class_name){
	$class_name = strtolower($class_name);
	$path = LIB_PATH.DS."{$class_name}.php";
	if(file_exists($path)){
		require_once($path);
	} else {
		die("The file {$class_name}.php could not be found.");
	}
}

function include_layout_template($template=""){
	include(SITE_ROOT.DS."public".DS.'layouts'.DS.$template);
}

function log_action($action, $message) {
        $filename = SITE_ROOT.DS."logs".DS."log.txt";
        $mode = "a+";
        $content = strftime('%Y-%m-%d %H:%M:%S')." | ".$action.": ".$message;
        if($handle = fopen($filename, $mode)) {
            if (!fwrite($handle, $content)) {
                echo "Error writing the file.";
            }
            fclose($handle);  
        }  else {
            echo "Error accessing the file.";
        }
}

function log_read() {
        $filename = SITE_ROOT.DS."logs".DS."log.txt";
        $mode = "r+";
        if($handle = fopen($filename, $mode)){
            $content = fread($handle, filesize($filename));
            $content = "{$content}\n <a href=\"logfile.php?logclear=true\">Clear logfile</a>";
            fclose($handle);  
            return nl2br($content);
        }  else {
            echo "Error accessing the file.";
        }
}

function log_clear($user_id) {
    
        $filename = SITE_ROOT.DS."logs".DS."log.txt";
        $mode = "w+";
        $content = strftime('%Y-%m-%d %H:%M:%S')." | Logs cleared by Session ID: {$user_id}.\n";
        if($handle = fopen($filename, $mode)){
            if (!fwrite($handle, $content)) {
                echo "Error writing the file.";
            }
            fclose($handle);
        }  else {
            echo "Error accessing the file.";
}
        
function datetime_to_text($datetime) {
            $unixdatetime = strtotime($datetime);
            return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
}
}

?>