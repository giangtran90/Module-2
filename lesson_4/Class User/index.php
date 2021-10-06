<?php
class User
{
    //Thuộc tính name có kiểu dữ liệu string thể hiện tên của người dùng, mức độ truy cập protected
    protected string $name;
    //Thuộc tính email có kiểu dữ liệu string thể hiện email của người dùng, mức độ truy cập protected
    protected string $email;
    //Thuộc tính role kiểu dữ liệu int thể hiện quyền của người dùng, 
    //giá trị 1 trương ứng với admin, 2 tương ứng với user, mức độ truy cập public
    public int $role; 

    public function setName($ts_name): void
    {
        $this->name = $ts_name;
    }
    protected function getName(): string
    {
        return $this->name;
    }

    public function setEmail($ts_email): void
    {
        $this->email = $ts_email;
    }
    protected function getEmail(): string
    {
        return $this->email;
    }

    public function setRole($ts_role): void
    {
        $this->role = $ts_role;
    }
    public function getRole(): int
    {
        return $this->role;
    }

    //Có phương thức getInfo() trả về thông tin của người dùng
    public function getInfo() 
    {
        return "<b>Name</b>: " . $this->name . "<br/>" . "<b>Email</b>: " . $this->email . "<br/>";
    }
    // Có phương thức isAdmin() kiểm tra nếu role bằng 1 hiển thị "là admin", 
    // nếu role bằng 2 hiển thị "là người dùng bình thường"
    public function isAdmin()
    {
        if ($this->role == 1)
        {
            return "<br/>" . "Account: " . "<b>" . $this->name . "</b>" . "<b> is a Admin</b>";
        }
        else
        {
            return "<br/>" . "Account: " . "<b>" . $this->name . "</b>" . "<b> is a User</b>";
        }
    }
}

$user_1 = new User();
$user_1->setName('Hung');
$user_1->setEmail('hung@gmail.com');
$user_1->setRole(2);
echo $user_1->getInfo();
echo $user_1->isAdmin();

echo "<hr/>";

$admin = new User();
$admin->setName('Giang');
$admin->setEmail('giang@gmail.com');
$admin->setRole(1);
echo $admin->getInfo();
echo $admin->isAdmin();
// echo "<br/>" . $admin->getRole();
// echo "<br/>" . $user_1->role;

?>