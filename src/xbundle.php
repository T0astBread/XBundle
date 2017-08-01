<?php
class XBundleLoader extends Twig_Extension
{
    private $bundle;
    private $bundleLocation;

    public function __construct(string $bundleLocation)
    {
        $this->bundleLocation = $bundleLocation;
    }

    public function loadBundle(string $bundleName)
    {
        $this->bundle = [];
        $content = file_get_contents($this->bundleLocation.$bundleName);
        foreach(preg_split("/\r\n/", $content) as $line)
        {
            $id = strstr($line, "=", true);
            $value = strstr($line, "=");
            $value = substr($value, 1, strlen($value) - 1);
            $this->bundle[$id] = $value;
        }
        return $this;
    }

    public function getFilters()
    {
        return [new Twig_SimpleFilter("bundle", [$this, "bundleFilter"])];
    }

    public function bundleFilter(string $key)
    {
        return isset($this->bundle[$key]) ? $this->bundle[$key] : $key;
    }
}
?>