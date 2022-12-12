<?php

foreach($articles as $value){
    echo "  <div class = 'post'>
        <div class = 'post-title-div'>
            <p class = 'post-title-p'>
                $value->title
            </p>
        </div>

        <div class = 'post-text-div'>
            <p class = 'post-text-p'>
                $value->content
            </p>

        </div>
    </div>";
}

?>
