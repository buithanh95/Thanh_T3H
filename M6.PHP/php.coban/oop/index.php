<?php
/**
 * class ( lớp )
 * object ( đối tượng )
 * instance ( thể hiện của 1 class ) đối tượng cụ thể
 * class Người
 * đối tượng hay instance tuấn
 */

    class Student {
        /**
         * thuộc tính trong hướng đối tượng
         * là tính chất của class đó
         */
        public $name;
        public $age;
        public $location;
        public $point;

        /**
         * Phương thức đầu tiên cuả class
         * phương thức khởi tạo __construct()
         * phương thức này nó sẽ chạy ngay khi khởi tạo đối tượng
         * từ class mà không cần gọi trực tiếp
         * Hàm thì nằm ngoài class
         * Còn phương thức method nằm trong class
         * method chính là hàm bên trong class
         */
        public function __construct($name_param, $age_param , $location_param)
        {
            // gán tham số truyền vào thuộc tính của class
            /**
             * trong class để gọi đến chính class thì ta dùng từ khóa $this
             * để gọi thuộc tính $this -> Tên_thuộc_tính nhưng chú ý là tên thuộc tính
             * k có $
             * $this->$name ( sai )
             * $this->name (đúng)
             */
            $this->name = $name_param;
            $this->age = $age_param;
            $this->location = $location_param;

            /**
             * __METHOD__ là magic method cho ta biết
             * phương thức nào đang được gọi
             */
            echo "<br> __METHOD__" .__METHOD__;
        }

        /**
         * Xây dựng phương thức khác
         */
        public function printInfo(){
            echo "<br> __METHOD__" . __METHOD__;
            echo "<br> Tên cảu sinh viên: " .$this->name;
            echo "<br> Tuổi của sinh viên: " .$this->age;
            echo  "<br> Quê hương của sinh viên:" .$this->location;
        }
        /**
         * Phương thức tính điểm trung bình
         * @param $point_arr_param
         * @return bool
         */
        public function calculatePoint($point_arr_param) {
            /**
             * is_array() kiểm tra biến có phải 1 mảng hay không
             * !empty() check không rỗng
             * empty() check rỗng
             * ! toán tử ! phủ định ngược lại
             */
            if (is_array($point_arr_param) && !empty($point_arr_param)) {
                $count = 0;
                $total = 0;
                foreach($point_arr_param as $key => $value) {
                    // $total = $total + value;
                    $total += $value;
                    $count++;
                }
                $point = $total/$count;
                $this->point = $point;
            }
            return false;
        }


    }// kết thức class

    /**
     * Khởi tạo đối tượng cụ thể của class
     * Sử dụng từ khóa new tên_class()
     */
    $tuan = new Student("tuan","21","bắc ninh");
    echo "<br> gọi đến method prinInfo()";
    /**
     * gọi 1 phương thức
     */

    $tuan->printInfo();

    /**
     * Gọi 1 thuộc tính bên trong class
     */
    echo "<br> In ra tên cảu sinh viên bên ngoài class " .$tuan->name;
    echo "<br> In ra tuổi cảu sinh viên bên ngoài class " .$tuan->age;
    echo "<br> In ra quê hương cảu sinh viên bên ngoài class " .$tuan->location;

    echo "<br> In ra cấu trúc của 1 class";
    /**
     * Xem cấu trúc của 1 class
     * thì sử dụng hàm print_r()
     */
    echo "<pre>";
    print_r($tuan);
    echo "</pre>";

    // gọi đến phương thức calculatePoint()
    $point = array(
        'java' =>5 ,
        'database' =>3,
        'php' => 6,
        'html' => 2,
        'oop' =>7,
        '.net' =>9
    );
    // gị đến thương thức của class
    $tuan->calculatePoint($point);
    echo "<br> điểm trung bình : " .$tuan->point;