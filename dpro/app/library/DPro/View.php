<?php

namespace DPro;

class View
{

    /**
     * @var array Data for the view
     */
    protected $data = array();

    /**
     * @var string The directory for the template files
     */
    protected $templatesDir;


    /********************************************************************************
     * Data methods
     *******************************************************************************/

    /**
     * Returns true if given key is set.
     * 
     * @param  string  $key
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->data);
    }

    /**
     * Return view data value of given key.
     * 
     * @param  string $key
     * @return mixed
     */
    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    /**
     * Set view data value with key.
     * 
     * @param string $key
     * @return \DPro\View
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;
        return $this;
    }

    /**
     * Return view data array.
     * 
     * @return array
     */
    public function all()
    {
        return $this->data;
    }

    /**
     * Replace view data array.
     * 
     * @param array $data
     * @return \DPro\View
     */
    public function replace(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Clear view data.
     * 
     * @return \DPro\View
     */
    public function clear()
    {
        $this->data = array();
        return $this;
    }
   
    /**
     * Set the base directory that contains view templates.
     * 
     * @param string $directory
     * @throws \InvalidArgumentException
     * @return \DPro\View
     */
    public function setTemplatesDirectory($directory)
    {
        $this->templatesDir = rtrim($directory, DIRECTORY_SEPARATOR);
        return $this;
    }

    /**
     * Get templates base directory.
     * 
     * @return string
     */
    public function getTemplatesDirectory()
    {
        return $this->templatesDir;
    }

    /**
     * Get fully qualified path to template file using templates base directory.
     * 
     * @param  string $file
     * @return string
     */
    public function getTemplatePathname($file)
    {
        return $this->templatesDir . DIRECTORY_SEPARATOR . ltrim($file, DIRECTORY_SEPARATOR);
    }

    /**
     * Return the contents of a rendered template file.
     * 
     * @param string $template
     * @return string
     */
    public function fetch($template)
    {
        return $this->render($template);
    }

    /**
     * Render a template file.
     *
     * NOTE: This method should be overridden by custom view subclasses
     *
     * @var string $template 
     * @return string
     * @throws \RuntimeException
     */
    protected function render($template)
    {
        $templatePathname = $this->getTemplatePathname($template);
        if (!is_file($templatePathname)) {
            throw new \RuntimeException("View cannot render `$template` because the template does not exist");
        }
        extract($this->data);
        ob_start();
        require $templatePathname;

        return ob_get_clean();
    }
}