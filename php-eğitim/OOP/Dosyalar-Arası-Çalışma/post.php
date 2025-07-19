<?php 

class Post {
    private $posts = [];

    public function create($title,$content) {
        $id = count($this->posts) + 1;;

        $this->posts['id'] = [ // posts['id'] dememizin sebebi o id'ye atanacak değerleri aşşağıya gireriz.Bu yüzden oraya id değeri yazarız.
            'id' => $id,
            'title' => $title,
            'content' => $content
        ];
        echo "İçerik oluşturuldu.";
    }

    public function update($id,$title,$content) {
        $this->posts['id'] = [ // posts['id'] dememizin sebebi o id'ye atanacak değerleri aşşağıya gireriz.Bu yüzden oraya id değeri yazarız.
            'id' => $id,
            'title' => $title,
            'content' => $content
        ];
        echo "İçerik oluşturuldu.";
    }

    public function readAll() {
        return $this->posts;
    }

    public function read($id) { // Bu yazdığımız function değeri dışarıdan aldığı id değeri eğer gerçekten varsa getirir yoksa da yani null ise "İçerik Bulunamadı Mesajı Döndürür."
        return $this->posts[$id] ?? "İçerik Bulunmadı";
    }

    public function delete($id) {
        unset($this->posts[$id]);
        echo "İçeril Silindi"; 
    }

}

// Burada oluşturduğumuz class değerini başka bir dosya da kullanmak için (require) yazarız.

?>