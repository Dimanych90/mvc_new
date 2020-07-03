<?php


namespace Base;


class Dispetcher
{
    const DEFAULT_CONTROLLER = 'index';
    const DEFAULT_ACTION = 'index';

    private $_contrname = '';

    private $_actionname = '';

    public function dispatch()
    {
        $request = Context::getInstance()->getRequest();

        $contrname = $request->getContrName();

        $actionname = $request->getActionName();


        if (!$contrname || !$this->check($contrname)) {
            $this->_contrname = self::DEFAULT_CONTROLLER;
        } else {
            $this->_contrname = ucfirst(strtolower($contrname));
        }
        if (!$actionname || !$this->check($actionname)) {
            $this->_actionname = self::DEFAULT_ACTION;
        } else {
            $this->_actionname = strtolower($actionname);
        }
    }

    private function check(string $key)
    {
        return preg_match('/[a-zA-Z0-9]+/', $key);

    }

    /**
     * @return string
     */
    public function getContrname(): string
    {
        return $this->_contrname;
    }

    /**
     * @param string $contrname
     */
    public function setContrname(string $contrname): void
    {
        $this->_contrname = $contrname;
    }

    /**
     * @return string
     */
    public function getActionname(): string
    {
        return $this->_actionname . 'Action';
    }

    public function getActionToken(): string
    {
        return $this->_actionname;
    }

    /**
     * @param string $actionname
     */
    public function setActionname(string $actionname): void
    {
        $this->_actionname = $actionname;
    }
}