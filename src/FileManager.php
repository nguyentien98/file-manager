<?php 
namespace TienNguyen\File;

/**
 * Package to manage your folders
 */
class FileManager
{

    protected $path;

	protected $types = array(
		'ai'      => 'application/postscript',
		'md'      => 'text/markdown',
		'aif'     => 'audio/x-aiff',
		'aifc'    => 'audio/x-aiff',
		'aiff'    => 'audio/x-aiff',
		'asc'     => 'text/plain',
		'atom'    => 'application/atom+xml',
		'atom'    => 'application/atom+xml',
		'au'      => 'audio/basic',
		'avi'     => 'video/x-msvideo',
		'bcpio'   => 'application/x-bcpio',
		'bin'     => 'application/octet-stream',
		'bmp'     => 'image/bmp',
		'cdf'     => 'application/x-netcdf',
		'cgm'     => 'image/cgm',
		'class'   => 'application/octet-stream',
		'cpio'    => 'application/x-cpio',
		'cpt'     => 'application/mac-compactpro',
		'csh'     => 'application/x-csh',
		'css'     => 'text/css',
		'csv'     => 'text/csv',
		'dcr'     => 'application/x-director',
		'dir'     => 'application/x-director',
		'djv'     => 'image/vnd.djvu',
		'djvu'    => 'image/vnd.djvu',
		'dll'     => 'application/octet-stream',
		'dmg'     => 'application/octet-stream',
		'dms'     => 'application/octet-stream',
		'doc'     => 'application/msword',
		'dtd'     => 'application/xml-dtd',
		'dvi'     => 'application/x-dvi',
		'dxr'     => 'application/x-director',
		'eps'     => 'application/postscript',
		'etx'     => 'text/x-setext',
		'exe'     => 'application/octet-stream',
		'ez'      => 'application/andrew-inset',
		'gif'     => 'image/gif',
		'gram'    => 'application/srgs',
		'grxml'   => 'application/srgs+xml',
		'gtar'    => 'application/x-gtar',
		'hdf'     => 'application/x-hdf',
		'hqx'     => 'application/mac-binhex40',
		'htm'     => 'text/html',
		'html'    => 'text/html',
		'ice'     => 'x-conference/x-cooltalk',
		'ico'     => 'image/x-icon',
		'ics'     => 'text/calendar',
		'ief'     => 'image/ief',
		'ifb'     => 'text/calendar',
		'iges'    => 'model/iges',
		'igs'     => 'model/iges',
		'jpe'     => 'image/jpeg',
		'jpeg'    => 'image/jpeg',
		'jpg'     => 'image/jpeg',
		'js'      => 'application/x-javascript',
		'json'    => 'application/json',
		'kar'     => 'audio/midi',
		'latex'   => 'application/x-latex',
		'lha'     => 'application/octet-stream',
		'lzh'     => 'application/octet-stream',
		'm3u'     => 'audio/x-mpegurl',
		'man'     => 'application/x-troff-man',
		'mathml'  => 'application/mathml+xml',
		'me'      => 'application/x-troff-me',
		'mesh'    => 'model/mesh',
		'mid'     => 'audio/midi',
		'midi'    => 'audio/midi',
		'mif'     => 'application/vnd.mif',
		'mov'     => 'video/quicktime',
		'movie'   => 'video/x-sgi-movie',
		'mp2'     => 'audio/mpeg',
		'mp3'     => 'audio/mpeg',
		'mpe'     => 'video/mpeg',
		'mpeg'    => 'video/mpeg',
		'mpg'     => 'video/mpeg',
		'mpga'    => 'audio/mpeg',
		'ms'      => 'application/x-troff-ms',
		'msh'     => 'model/mesh',
		'mxu'     => 'video/vnd.mpegurl',
		'nc'      => 'application/x-netcdf',
		'oda'     => 'application/oda',
		'ogg'     => 'application/ogg',
		'pbm'     => 'image/x-portable-bitmap',
		'pdb'     => 'chemical/x-pdb',
		'pdf'     => 'application/pdf',
		'pgm'     => 'image/x-portable-graymap',
		'pgn'     => 'application/x-chess-pgn',
		'png'     => 'image/png',
		'pnm'     => 'image/x-portable-anymap',
		'ppm'     => 'image/x-portable-pixmap',
		'ppt'     => 'application/vnd.ms-powerpoint',
		'ps'      => 'application/postscript',
		'qt'      => 'video/quicktime',
		'ra'      => 'audio/x-pn-realaudio',
		'ram'     => 'audio/x-pn-realaudio',
		'ras'     => 'image/x-cmu-raster',
		'rdf'     => 'application/rdf+xml',
		'rgb'     => 'image/x-rgb',
		'rm'      => 'application/vnd.rn-realmedia',
		'roff'    => 'application/x-troff',
		'rss'     => 'application/rss+xml',
		'rtf'     => 'text/rtf',
		'rtx'     => 'text/richtext',
		'sgm'     => 'text/sgml',
		'sgml'    => 'text/sgml',
		'sh'      => 'application/x-sh',
		'shar'    => 'application/x-shar',
		'silo'    => 'model/mesh',
		'sit'     => 'application/x-stuffit',
		'skd'     => 'application/x-koan',
		'skm'     => 'application/x-koan',
		'skp'     => 'application/x-koan',
		'skt'     => 'application/x-koan',
		'smi'     => 'application/smil',
		'smil'    => 'application/smil',
		'snd'     => 'audio/basic',
		'so'      => 'application/octet-stream',
		'spl'     => 'application/x-futuresplash',
		'src'     => 'application/x-wais-source',
		'sv4cpio' => 'application/x-sv4cpio',
		'sv4crc'  => 'application/x-sv4crc',
		'svg'     => 'image/svg+xml',
		'svgz'    => 'image/svg+xml',
		'swf'     => 'application/x-shockwave-flash',
		't'       => 'application/x-troff',
		'tar'     => 'application/x-tar',
		'tcl'     => 'application/x-tcl',
		'tex'     => 'application/x-tex',
		'texi'    => 'application/x-texinfo',
		'texinfo' => 'application/x-texinfo',
		'tif'     => 'image/tiff',
		'tiff'    => 'image/tiff',
		'tr'      => 'application/x-troff',
		'tsv'     => 'text/tab-separated-values',
		'txt'     => 'text/plain',
		'ustar'   => 'application/x-ustar',
		'vcd'     => 'application/x-cdlink',
		'vrml'    => 'model/vrml',
		'vxml'    => 'application/voicexml+xml',
		'wav'     => 'audio/x-wav',
		'wbmp'    => 'image/vnd.wap.wbmp',
		'wbxml'   => 'application/vnd.wap.wbxml',
		'wml'     => 'text/vnd.wap.wml',
		'wmlc'    => 'application/vnd.wap.wmlc',
		'wmls'    => 'text/vnd.wap.wmlscript',
		'wmlsc'   => 'application/vnd.wap.wmlscriptc',
		'wrl'     => 'model/vrml',
		'xbm'     => 'image/x-xbitmap',
		'xht'     => 'application/xhtml+xml',
		'xhtml'   => 'application/xhtml+xml',
		'xls'     => 'application/vnd.ms-excel',
		'xml'     => 'application/xml',
		'xpm'     => 'image/x-xpixmap',
		'xsl'     => 'application/xml',
		'xslt'    => 'application/xslt+xml',
		'xul'     => 'application/vnd.mozilla.xul+xml',
		'xwd'     => 'image/x-xwindowdump',
		'xyz'     => 'chemical/x-xyz',
		'zip'     => 'application/zip'
	);
	
    public function __construct($path = '.')
    {
        $this->path = $path;
        if (!file_exists($this->path)) {
        	echo "404. Folder not found!!!";
        	die;
        }
    }

    public function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }
        return $bytes;
	}

	public function getFileType($extension)
	{
		if(array_key_exists($extension, $this->types))
			return $this->types[$extension];
		return false;
	}

	public function go($path)
	{
		if (file_exists($this->path.'/'.$path) && !is_file($path)) {
			$this->path .= '/'.$path;
			return true;
		}
		echo "404. Not found";
		die;
	}

    public function scan(): array
    {
        $list = scandir($this->path);
        $listFiltered = [];
        foreach ($list as $child) {
        	if ($child != '.' && $child != '..' && file_exists($this->path.'/'.$child)) {
        		$listFiltered[] = $child;
        	}
        }
        return $listFiltered;

    }

    public function getFileSize($file_name)
    {
    	if (file_exists($this->path.'/'.$file_name)) {
    		return $this->formatSizeUnits(filesize($this->path.'/'.$file_name));
    	}
    	return false;
    }

    public function extension($file_name)
    {
    	$pathinfo = pathinfo($this->path.'/'.$file_name);
    	if (array_key_exists('extension', $pathinfo)) {
    		return $pathinfo['extension'];
    	}
    	return 'Unknown';
    }

    public function typeOfFile($file_name)
    {
    	$extension = $this->extension($file_name);
    	return $this->getFileType($extension);
    }

    public function nameOfFile($file_name)
    {
    	return pathinfo($this->path.'/'.$file_name)['filename'];
    }

    public function fileInfo($value, $thumb = false)
    {
    	if (!$value) {
    		return false;
    	}
    	$info = [
    			'name' => $this->nameOfFile($value),
    			'file_name' => $value,
    			'type' => $this->typeOfFile(strtolower($value)) == false ? 'Unknown' : $this->typeOfFile(strtolower($value)),
    			'extension' => $this->extension(strtolower($value)),
    			'size' => $this->getFileSize($value),
    	];
    	if ($thumb == true) {
    		$info['thumbnail'] = "http://".$this->extensionThumb($this->extension(strtolower($value)));
    	}
    	return $info;
    }

    public function classify($showThumbail = false)
    {
    	$files = [];
    	$folders = [];
    	foreach ($this->scan() as $value) {
    		if (is_file($this->path.'/'.$value)) {
    			$files[] = $this->fileInfo($value, $showThumbail);
    		} else {
    			$folders[] = [
    				'name' => $this->nameOfFile($value)
    			];
    		}
    	}
    	return [
    		'files' => $files,
    		'folders' => $folders
    	];
    }

    public function searchByExtension($extension)
    {
    	$files = $this->classify();
    	$list = [];
    	foreach ($files as $value) {
    		if ($value['extension'] == strtolower($extension)) {
    			$list[] = $value;
    		}
    	}
    	return $list;
    }

    public function searchByMIME($mime)
    {
    	$files = $this->classify();
    	$list = [];
    	if(in_array($mime, $this->types)){
    		foreach ($files as $value) {
	    		if ($this->getFileType($value['extension']) == $mime) {
	    			$list[] = $value;
	    		}
	    	}
	    	return $list;
    	}
    	return false;
    }

    public function deleteFile($file_name)
    {
    	if(file_exists($this->path.'/'.$file_name))
	    	return unlink($this->path.'/'.$file_name);
	    return false;
    }

    public function createFile($file_name, $content)
    {
    	if (in_array($file_name, $this->scan())) {
    		return false;
    	}
    	return file_put_contents($this->path.'/'.$file_name, $content);
    }

    public function getContent($file_name)
    {
    	if (!in_array($file_name, $this->scan())) {
    		return false;
    	}
    	return file_get_contents($this->path.'/'.$file_name);
    }

    public function rename($old, $new)
    {
    	if ($file = $this->getContent($old)) {
    		$delete = $this->deleteFile($old);
    		$create = $this->createFile($new, $file);
    		return $delete && $create;
    	}
    	return false;
    }

    public function extensionThumb($extension)
    {
    	$url = 'https://fileinfo.com/extension/'.$extension;
    	$getHtml = file_get_contents($url);
    	$firstPattern = '.f1 { background-image: url(//';
    	$firstPos = strpos($getHtml, $firstPattern) + strlen($firstPattern);
    	$lastPos = strpos($getHtml, '); }');
    	return substr($getHtml, $firstPos, $lastPos - $firstPos);
    }
}