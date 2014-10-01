<?php

class m140929_194924_insert_tbl_comment_news {
    public function up()
    {
        $comments = array();
        
        $comment = new NpCommentNews();
        $comment->userId = '1';
        $comment->newsId = '1';
        $comment->content = 'Первый комментарний, первой новости!';
        $comment->commentDate = date('Y-m-d H:i:s');
        $comments[] = $comment;
        
        $comment = new NpCommentNews();
        $comment->userId = '2';
        $comment->newsId = '1';
        $comment->content = 'Второй комментарний, первой новости!';
        $comment->commentDate = date('Y-m-d H:i:s');
        $comments[] = $comment;
        
        $comment = new NpCommentNews();
        $comment->userId = '1';
        $comment->newsId = '2';
        $comment->content = 'Первый комментарний, второй новости!';
        $comment->commentDate = date('Y-m-d H:i:s');
        $comments[] = $comment;
        
        $comment = new NpCommentNews();
        $comment->userId = '2';
        $comment->newsId = '2';
        $comment->content = 'Второй комментарний, второй новости!';
        $comment->commentDate = date('Y-m-d H:i:s');
        $comments[] = $comment;
        
        $comment = new NpCommentNews();
        $comment->userId = '1';
        $comment->newsId = '3';
        $comment->content = 'Первый комментарний, третьей новости!';
        $comment->commentDate = date('Y-m-d H:i:s');
        $comments[] = $comment;
        
        $comment = new NpCommentNews();
        $comment->userId = '2';
        $comment->newsId = '3';
        $comment->content = 'Второй комментарний, третьей новости!';
        $comment->commentDate = date('Y-m-d H:i:s');
        $comments[] = $comment;

               foreach( $comments as $comment ) {
            /**
             * @var NpNewsItem $newsItem
             */
            if ($comment->save()) {
                echo "Inserted: " . $comment->commentId . "\n";
            } else {
                echo "Can`t insert: " . print_r($comment->getErrors(), 1) . "\n";
                return false;
            }
        }
        return true;
    }
    
    public function down(){
        $this->truncateTable(NpCommentNews::model()->tableName());
        return true;
    }

    }
 