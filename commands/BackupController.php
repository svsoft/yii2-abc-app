<?php
namespace app\commands;

use yii\console\Controller;
use yii\console\Exception;
use yii\helpers\FileHelper;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BackupController extends Controller
{
    public function actionIndex()
    {
        if (!\Yii::$app->components['backup']['backupsFolder'])
            throw new Exception('Property backupsFolder is not set in component backup config');

        $backupFolder = \Yii::$app->components['backup']['backupsFolder'];
        if (!file_exists($backupFolder))
        {
            if (FileHelper::createDirectory($backupFolder))
            {
                file_put_contents($backupFolder . '/.gitignore', '*' . PHP_EOL . '!.gitignore');
            }

        }


        $backup = \Yii::$app->backup;

        $file = $backup->create();

        $this->stdout('Backup file created: ' . $file . PHP_EOL, \yii\helpers\Console::FG_GREEN);
    }
}
