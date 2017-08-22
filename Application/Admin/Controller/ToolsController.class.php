<?php
namespace Admin\Controller;
class ToolsController extends AdminController {
	//清理缓存的页面
    public function index()
	{
		$size = $this->getDirSize('./Runtime/');
		$this->assign('cacheSize', round($size / pow(1024, $i = floor(log($size, 1024))), 2));
		$this->display();
    }
	//执行清理缓存;
	public function delcache()
	{
		$dirs = array('./Runtime/');
		@mkdir('Runtime', 511, true);

		foreach ($dirs as $value) {
			$this->rmdirr($value);
		}

		@mkdir('Runtime', 511, true);
		$this->success('系统缓存清除成功！');
	}
	protected function getDirSize($dir)
	{
		$sizeResult = '';
		$handle = opendir($dir);

		while (false !== ($FolderOrFile = readdir($handle))) {
			if (($FolderOrFile != '.') && ($FolderOrFile != '..')) {
				if (is_dir($dir . '/' . $FolderOrFile)) {
					$sizeResult += $this->getDirSize($dir . '/' . $FolderOrFile);
				}
				else {
					$sizeResult += filesize($dir . '/' . $FolderOrFile);
				}
			}
		}

		closedir($handle);
		return $sizeResult;
	}
	protected function rmdirr($dirname)
	{
		if (!file_exists($dirname)) {
			return false;
		}

		if (is_file($dirname) || is_link($dirname)) {
			return unlink($dirname);
		}
		$dir = dir($dirname);

		if ($dir) {
			while (false !== ($entry = $dir->read())) {
				if (($entry == '.') || ($entry == '..')) {
					continue;
				}

				$this->rmdirr($dirname . DIRECTORY_SEPARATOR . $entry);
			}
		}
		$dir->close();
		return rmdir($dirname);
	}
	//执行数据库备份的的显示页面
	public function dataExport()
	{
		redirect('/Admin/Tools/database?type=export');
	}
	public function database($type = NULL)
	{
		switch ($type) {
		case 'export':
			$Db = \Think\Db::getInstance();
			$list = $Db->query('SHOW TABLE STATUS');
			$list = array_map('array_change_key_case', $list);
			$title = '数据备份';
			break;
		default:
			$this->error('参数错误！');
		}
		$this->assign('meta_title', $title);
		$this->assign('list', $list);
		$this->display($type);
	}
	//执行数据表的优化；
	public function optimize($tables = NULL)
	{
		if ($tables) {
			$Db = \Think\Db::getInstance();

			if (is_array($tables)) {
				$tables = implode('`,`', $tables);
				$list = $Db->query('OPTIMIZE TABLE `' . $tables . '`');

				if ($list) {
					$this->success('数据表优化完成！');
				}
				else {
					$this->error('数据表优化出错请重试！');
				}
			}
			else {
				$list = $Db->query('OPTIMIZE TABLE `' . $tables . '`');

				if ($list) {
					$this->success('数据表\'' . $tables . '\'优化完成！');
				}
				else {
					$this->error('数据表\'' . $tables . '\'优化出错请重试！');
				}
			}
		}
		else {
			$this->error('请指定要优化的表！');
		}
	}
	//执行数据表的修复;
	public function repair($tables = NULL)
	{
		if ($tables) {
			$Db = \Think\Db::getInstance();

			if (is_array($tables)) {
				$tables = implode('`,`', $tables);
				$list = $Db->query('REPAIR TABLE `' . $tables . '`');

				if ($list) {
					$this->success('数据表修复完成！');
				}
				else {
					$this->error('数据表修复出错请重试！');
				}
			}
			else {
				$list = $Db->query('REPAIR TABLE `' . $tables . '`');

				if ($list) {
					$this->success('数据表\'' . $tables . '\'修复完成！');
				}
				else {
					$this->error('数据表\'' . $tables . '\'修复出错请重试！');
				}
			}
		}
		else {
			$this->error('请指定要修复的表！');
		}
	}
	//执行数据表的导出操作;
	public function excel($tables = NULL)
	{
		if ($tables) {
			$mo = M();
			$mo->execute('set autocommit=0');
			$mo->execute('lock tables ' . $tables . ' write');
			$rs = $mo->table($tables)->select();
			$zd = $mo->table($tables)->getDbFields();

			if ($rs) {
				$mo->execute('commit');
				$mo->execute('unlock tables');
			}
			else {
				$mo->execute('rollback');
			}

			$xlsName = $tables;
			$xls = array();

			foreach ($zd as $k => $v) {
				$xls[$k][0] = $v;
				$xls[$k][1] = $v;
			}

			$this->exportExcel($xlsName, $xls, $rs);
		}
		else {
			$this->error('请指定要导出的表！');
		}
	}
	public function exportExcel($expTitle, $expCellName, $expTableData)
	{
		import('Org.Util.PHPExcel');
		import('Org.Util.PHPExcel.Writer.Excel5');
		import('Org.Util.PHPExcel.IOFactory.php');
		$xlsTitle = iconv('utf-8', 'gb2312', $expTitle);
		$fileName = $_SESSION['loginAccount'] . date('_YmdHis');
		$cellNum = count($expCellName);
		$dataNum = count($expTableData);
		$objPHPExcel = new \PHPExcel();
		$cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');
		$objPHPExcel->getActiveSheet(0)->mergeCells('A1:' . $cellName[$cellNum - 1] . '1');
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle . '  Export time:' . date('Y-m-d H:i:s'));

		for ($i = 0; $i < $cellNum; $i++) {
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i] . '2', $expCellName[$i][1]);
		}

		for ($i = 0; $i < $dataNum; $i++) {
			for ($j = 0; $j < $cellNum; $j++) {
				$objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j] . ($i + 3), $expTableData[$i][$expCellName[$j][0]]);
			}
		}

		ob_end_clean();
		header('pragma:public');
		header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xls"');
		header('Content-Disposition:attachment;filename=' . $fileName . '.xls');
		$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit();
	}
	public function export($tables = NULL, $id = NULL, $start = NULL)
	{
		if(C('web_close')){
			$this->error('请先关闭网站再备份数据库！');
		}
		if (IS_POST && !empty($tables) && is_array($tables)) {
			$config = array('path' => realpath(DATABASE_PATH) . DIRECTORY_SEPARATOR, 'part' => 20971520, 'compress' => 1, 'level' => 9);
			$lock = $config['path'] . 'backup.lock';

			if (is_file($lock)) {
				$this->error('检测到有一个备份任务正在执行，请稍后再试！');
			}
			else {
				file_put_contents($lock, NOW_TIME);
			}

			is_writeable($config['path']) || $this->error('备份目录不存在或不可写，请检查后重试！');
			session('backup_config', $config);
			$file = array('name' => date('Ymd-His', NOW_TIME), 'part' => 1);
			session('backup_file', $file);
			session('backup_tables', $tables);
			$Database = new \OT\Database($file, $config);

			if (false !== $Database->create()) {
				$tab = array('id' => 0, 'start' => 0);
				$this->success('初始化成功！', '', array('tables' => $tables, 'tab' => $tab));
			}
			else {
				$this->error('初始化失败，备份文件创建失败！');
			}
		}
		else {
			if (IS_GET && is_numeric($id) && is_numeric($start)) {
				$tables = session('backup_tables');
				$Database = new \OT\Database(session('backup_file'), session('backup_config'));
				$start = $Database->backup($tables[$id], $start);

				if (false === $start) {
					$this->error('备份出错！');
				}
				else if (0 === $start) {
					if (isset($tables[++$id])) {
						$tab = array('id' => $id, 'start' => 0);
						$this->success('备份完成！', '', array('tab' => $tab));
					}
					else {
						unlink(session('backup_config.path') . 'backup.lock');
						session('backup_tables', null);
						session('backup_file', null);
						session('backup_config', null);
						$this->success('备份完成！');
					}
				}
				else {
					$tab = array('id' => $id, 'start' => $start[0]);
					$rate = floor(100 * ($start[0] / $start[1]));
					$this->success('正在备份...(' . $rate . '%)', '', array('tab' => $tab));
				}
			}
			else {
				$this->error('参数错误！');
			}
		}
	}
	
	
}