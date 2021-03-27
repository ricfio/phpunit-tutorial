<?php declare(strict_types=0);

final class CsvFileIterator implements Iterator
{
    private $file;
    private $key = 0;
    private $current;

    public function __construct(string $file) 
    {
        $this->file = fopen($file, 'r');
    }

    public function __destruct()
    {
        fclose($this->file);
    }

    protected function getrow()
    {
        $row = fgetcsv($this->file);
        if (is_array($row)) {
            $row = array_map('intval', $row);
        }
        return $row;
    }

    public function rewind(): void
    {
        rewind($this->file);

        $this->current = $this->getrow();

        $this->key = 0;
    }

    public function valid(): bool
    {
        return !feof($this->file);
    }

    public function key(): int
    {
        return $this->key;
    }

    public function current(): array
    {
        return $this->current;
    }

    public function next(): void
    {
        $this->current = $this->getrow();

        $this->key++;
    }
}
