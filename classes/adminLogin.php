<?php
include '../lib/session.php';
SESSION::checkLogin();
include '../helpers/format.php';
include '../lib/database.php';
?>

<?php
class AdminLogin
{
  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

  public function check_admin_login($adminUser, $adminPass)
  {
    $adminUser = $this->fm->validation($adminUser);
    $adminPass = $this->fm->validation($adminPass);

    $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
    $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

    if (empty($adminUser) || empty($adminPass)) {
      $alert = "Username and password must be required";
      return $alert;
    } else {
      $query = "SELECT * FROM admin_tbl WHERE adminUser='$adminUser' AND adminPass=md5($adminPass) LIMIT 1";
      $result = $this->db->select($query);

      if ($result != false) {
        $value = $result->fetch_assoc();

        SESSION::set('adminLogin', true);

        SESSION::set('adminId', $value['adminId']);
        SESSION::set('adminUser', $value['adminUser']);
        SESSION::set('adminName', $value['adminName']);

        header('Location:index.php');
      } else {
        $alert = "User and Pass dont match";
        return $alert;
      }
    }
  }
}
