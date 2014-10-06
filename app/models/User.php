<?php
use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $timestamps = true;
	  
	protected $table = 'users';
	
	protected $fillable = array(
		'email', 'password', 'permission'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');
	
	public static $rules = array(
			'email'=>'required|email',
			'password'=>'required|alpha_num|between:6,12',
		);
		
	public function getAuthIdentifier()
	{
		return $this->email;
	}
	
	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}
	
	public function products()
	{
		return DB::table('product_user_mappings')
					->leftJoin('products', 'product_user_mappings.product_id', '=', 'products.id')
					->where('product_user_mappings.user_id', '=' , $this->id)
					->get();
	}
	
	public function getRememberToken()
  {
      return $this->remember_token;
  }

  public function setRememberToken($value)
  {
      $this->remember_token = $value;
  }

  public function getRememberTokenName()
  {
      return 'remember_token';
  }
}