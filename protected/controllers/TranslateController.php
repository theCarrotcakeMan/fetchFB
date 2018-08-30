<?php

class TranslateController extends Controller
{
	public function actionDo()
	{
		$this->render('do');
	}

	public function actionUndo()
	{
		$this->render('undo');
	}

	
}