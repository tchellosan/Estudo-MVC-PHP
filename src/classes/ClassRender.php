<?php 
namespace Src\Classes;

use Src\Interfaces\InterfaceView;

class ClassRender implements InterfaceView {

	private $dir;
	private $title;
	private $description;
	private $keywords;

	public function getDir()						{return $this->dir;}
	public function setDir($dir)					{$this->dir	= $dir;}

	public function getTitle()						{return $this->title;}
	public function setTitle($title)				{$this->title = $title;}

	public function getDescription()				{return $this->description;}
	public function setDescription($description)	{$this->description = $description;}

	public function getKeywords()					{return $this->keywords;}	
	public function setKeywords($keywords)			{$this->keywords = $keywords;}

	public function renderLayout() {
		include_once(DIRREQ.'app/view/Layout.php');
	}

	public function addHead(){
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")) {
			include_once(DIRREQ."app/view/{$this->getDir()}/Head.php");
		}
	}
	public function addHeader(){
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")) {
			include_once(DIRREQ."app/view/{$this->getDir()}/Header.php");
		}
	}
	public function addMain(){
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")) {
			include_once(DIRREQ."app/view/{$this->getDir()}/Main.php");
		}
	}
	public function addFooter(){
		if (file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")) {
			include_once(DIRREQ."app/view/{$this->getDir()}/Footer.php");
		}
	}
}