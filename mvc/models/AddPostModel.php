<?php
    class AddPostModel extends DB {
        public function addPost($title, $SEOkey, $description, $content) {
            $query = "INSERT INTO posts(title, description, content, SEOkey) values('$title', '$SEOkey', '$description', '$content');";
            // echo "<script>console.log(\"Debug Objects: " . $query . " \" );</script>";
            mysqli_query($this->con, $query);
        }
    }
?>