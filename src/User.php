<?php
namespace Gigigo\Orchextra;


class User {
  /**
    * @var User
  */
  protected $user;

    /**
     * User constructor.
     * @param User $user
     */
    public function __construct($user){
      $this->user = $user;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
      return $this->user->languagaCode;
  }
  /**
   * @return string
   */
  public function getRole()
  {
      return $this->user->role;
  }
  /**
   * @return string
   */
  public function getPassword()
  {
      return $this->user->password;
  }
  /**
   * @return string
   */
  public function getEmail()
  {
      return $this->user->email;
  }
  /**
   * @return string
   */
  public function getName()
  {
      return $this->user->name;
  }
  /**
   * @return string
   */
  public function getUsername()
  {
      return $this->user->username;
  }
  /**
   * @return string
   */
  public function getProjectIds()
  {
      return $this->user->projectsIds;
  }

}
