<?php
  class Upload extends DB
  {
    function __construct()
    {
      parent::__construct();
    }

    public function fileupload ($file) 
    {
        $target_dir    = "public/img/";
        $target_file   = $target_dir . basename( $file["name"] );

        
            if ( move_uploaded_file( $file["tmp_name"], $target_file ) ) {
				echo "<font color='green'> The file " . basename( $file["name"] ) . " has been uploaded.</font>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
    }


  }
?>