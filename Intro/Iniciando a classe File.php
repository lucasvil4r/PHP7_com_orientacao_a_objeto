class File
{
    protected $file;
    protected $recurso;

    public function __construct($file)
    {
        $this->$file = $file;
    }

    public function __destruct()
    {
        
    }
}
