<?php 

/* Kalıtım, bir sınıfın başka bir sınıftan özellikleri ve metotları devralmasını sağlar. */

require 'post.php';

class FeaturedPost extends Post { // (extends) değeri ile Post adlı class değerin içerisindeki değerleri miras almış olurum yani bu class içerisinde de kullanabilirim.
    private $featuredPosts = [];     

    public function markAsFeatured($id) {
        $post = $this->read($id);
        $this->featuredPosts[$id] = $post;
        echo "Öne Çıkarıldı";
    }

    public function getFeaturedPosts() {
        return $this->featuredPosts;
    }

}

?>