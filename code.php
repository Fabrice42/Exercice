<?php
  /** <h1>Projet PHP factice</h1>
	* <h2>Cours OpenClassrooms</h2>
	*
	* @author Fabrice42 <fabrice42@temp.mail>
	**/
namespace \OpenClassrooms;

public class Code
{
	protected $version;
	protected $auteur;
	protected $exercice;
	
	public function __construct($version, $auteur, Exercice $exerice)
	{
		if (is_int($version) && ($version > 0)) $this->version = $version;
		if (is_string($auteur) && strlen($auteur)) $this->auteur = $auteur;
		$this->exercice = $exercice;
	}
	
	/// SETTERS ///
	public set_version($version)
	{
		if (is_int($version) && ($version > 0)) $this->version = $version;
	}
	public set_auteur($auteur)
	{
		if (is_string($auteur) && strlen($auteur)) $this->auteur = $auteur;
	}
	public set_exercice(Exercice $exercice)
	{
		$this->exercice = $exercice;
	}
	
	/// ISSERS ///
	public is_valid()
	{
		return (isset($this->auteur) && isset($this->version));
	}
	
	/// GETTERS ///
	public function version()
	{
		return $this->version;
	}
	public function auteur()
	{
		return $this->auteur;
	}
	public function exercice()
	{
		return $this->exercice;
	}
}
?>