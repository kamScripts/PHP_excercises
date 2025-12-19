<?php



/**
 * Description of User
 *
 * @author kamil
 */
class User {
    private $name;
    private $login;
    private $password;
    
    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;        
    }
    public function getName() {
        return $this->name;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setName($name): void {
        $this->name = $name;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

        public function display() {
        echo "<pre>";
        echo "<article>";
        echo "<h2>Hello," . $this->getLogin() . "</h2>";
        echo "<p>Name:" . $this->getName(). "</p>";
        echo "<p>Password: " . $this->get_password() . "</p></article>";
        
        echo "</pre>";
    }
}
