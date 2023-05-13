
<?php

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverBy;

class SampleTest extends TestCase
{
    // public function testCookie()
    // {
    //     // selenium
    //     $host = 'http://172.17.0.1:4444/wd/hub'; #Github Actions上で実行可能なHost
    //     // chrome ドライバーの起動
    //     $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    //     // 指定URLへ遷移 (Google)
    //     $driver->get('http://php/src/cookie1.php');

    //     // **cookie1.php**
    //     // テキストボックスの要素を取得
    //     $element_user = $driver->findElement(WebDriverBy::xpath('//html/body/form/input[1]'));
    //     // テキストボックスの要素に値を入力
    //     $element_user->sendKeys('神戸');

    //     // 画面遷移実行
    //     $element_user->submit();

    //     // **cookie2.php**
    //     // リンクをクリック
    //     $driver->findElement(WebDriverBy::xpath('//html/body/a[1]'))->click();

    //     // **cookie3.php**
    //     // pタグの要素を取得
    //     $element_cookie = $driver->findElement(WebDriverBy::xpath('//html/body/p'));
    //     $this->assertStringContainsString("神戸", $element_cookie->getText());

    //     // ブラウザを閉じる
    //     $driver->close();
    // }

    public function testSession()
    {
        // selenium
        $host = 'http://172.17.0.1:4444/wd/hub'; #Github Actions上で実行可能なHost
        // chrome ドライバーの起動
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
        // 指定URLへ遷移 (Google)
        $driver->get('http://php/src/session1.php');

        // **session1.php**
        // テキストボックスの要素を取得
        $element_name = $driver->findElement(WebDriverBy::xpath('//html/body/form/input[1]'));
        // テキストボックスの要素に値を入力
        $element_name->sendKeys('神戸電子');
        // 画面遷移実行
        $element_name->submit();

        // **session2.php**
        // テキストボックスの要素を取得
        $element_job = $driver->findElement(WebDriverBy::xpath('//html/body/form/input[1]'));
        // テキストボックスの要素に値を入力
        $element_job->sendKeys('SE');
        // 画面遷移実行
        $element_job->submit();

        // **session3.php**
        // テキストボックスの要素を取得
        $element_age = $driver->findElement(WebDriverBy::xpath('//html/body/form/input[1]'));
        // テキストボックスの要素に値を入力
        $element_age->sendKeys('21');
        // 画面遷移実行
        $element_age->submit();

        // **session4.php**
        // リンクをクリック
        $driver->findElement(WebDriverBy::xpath('//html/body/a[1]'))->click();

        // **session5.php**
        // pタグの値を取得
        $elements = $driver->findElements(WebDriverBy::xpath('//html/body/p'));
        //assert
        $this->assertStringContainsString("神戸電子", $elements[1]->getText());
        $this->assertStringContainsString("21", $elements[3]->getText());

        $driver->findElement(WebDriverBy::xpath('//html/body/a[1]'))->click();

        // **session6.php**
        $driver->findElement(WebDriverBy::xpath('//html/body/a[1]'))->click();

        // ブラウザを閉じる
        //$driver->close();
    }
}
