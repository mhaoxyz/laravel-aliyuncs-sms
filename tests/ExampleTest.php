<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{

    public function test()
    {
        $sms = new \Mhaoxyz\Aliyuncs\SMS\SMS('app_id', 'key');
        $sms->setSignName('麦瑟科技');
        $sms->setTemplateCode('SMS_56665455');
        $sms->setParamStrings([
            'customer' => 'mh',
        ]);
        $sms->setRecNum('13420611739');

        $result = $sms->send();
        $this->assertTrue($result);
        echo 'ok';
    }
}