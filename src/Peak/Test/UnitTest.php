<?php

namespace Peak\Test;

abstract class UnitTest
{
	public function __construct()
    {

    }

    /**
     * ran before each test method
     */
    public function setUp()
    {
        //do nothing
    }

    /**
     * ran after each test method
     */
    public function tearDown()
    {
        //do nothing
    }    

    public function run()
    {
        $methods = get_class_methods($this);
        foreach ($methods as $method) {
            // if method starts with "test"
            if (!strncmp($method, "test", strlen("test"))) {
                $this->setUp();
                call_user_func(array($this, $method));
                $this->tearDown();
            }
        }
    }
}