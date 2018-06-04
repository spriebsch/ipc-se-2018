<?php

namespace ipc\carskills;

interface LidApi
{
    public function close(): void;
    public function open(): void;
}
