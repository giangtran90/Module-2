<?php
class StopWatch
{
    private $startTime;
    private $stopTime;

    //Trường startTime và endTime là private với phương thức getter để trả về giá trị của startTime và endTime.
    //Phương thức khởi tạo không tham số khởi tạo startTime với thời gian hiện tại của hệ thống.
    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getStopTime()
    {
        return $this->stopTime;
    }

    //Phương thức start() để reset startTime về thời gian hiện tại của hệ thống.
    public function start()
    {
        $this->startTime = microtime(true);

    }
    //Phương thức stop() để thiết đặt endTime về thời gian hiện tại của hệ thống.
    public function stop() 
    {
        $this->stopTime = microtime(true);
    }
    //Phương thức getElapsedTime() trả về thời gian đã trôi qua theo số milisecond giây
    public function getElapsedTime()
    {  
        return ($this->getStopTime() - $this->getStartTime()) * 1000;
    }

    public function selectionSort()
    {
        //Viết chương trình đo thời gian thực thi của thuật toán sắp xếp chọn (selection sort) cho 100,000 số.
        for ($i = 0; $i < 100000; $i++) 
        {
            //do anything
        }
    }

}

?>