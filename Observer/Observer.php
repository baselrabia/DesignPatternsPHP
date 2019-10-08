<?php

namespace Observer;

include_once 'Subject.php';

interface Observer {
    public function update(Subject $subject);
}