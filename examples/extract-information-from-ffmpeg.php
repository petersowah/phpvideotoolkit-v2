<?php

    include_once './includes/bootstrap.php';
    
    $ffmpeg = new \PHPVideoToolkit\FfmpegParser($config);

    $is_available = $ffmpeg->isAvailable();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->isAvailable()', $is_available);

    $ffmpeg_version = $ffmpeg->getVersion();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getVersion()', $ffmpeg_version);
    
    $has_ffmpeg_php_support = $ffmpeg->hasFfmpegPhpSupport();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->hasFfmpegPhpSupport()', $has_ffmpeg_php_support);
    
    $basic_ffmpeg_information = $ffmpeg->getFfmpegData();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getFfmpegData()', $basic_ffmpeg_information);
    
    $basic_ffmpeg_information = $ffmpeg->getCommands();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getCommands()', $basic_ffmpeg_information);
    
    $ffmpeg_formats = $ffmpeg->getFormats();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getFormats()', $ffmpeg_formats);
    
    $ffmpeg_audio_codecs = $ffmpeg->getCodecs('audio');
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getCodecs(\'audio\')', $ffmpeg_audio_codecs);
    
    $ffmpeg_video_codecs = $ffmpeg->getCodecs('video');
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getCodecs(\'video\')', $ffmpeg_video_codecs);
    
    $ffmpeg_subtitle_codecs = $ffmpeg->getCodecs('subtitle');
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getCodecs(\'subtitle\')', $ffmpeg_subtitle_codecs);
    
    $ffmpeg_bitstream_filters = $ffmpeg->getBitstreamFilters();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getBitstreamFilters()', $ffmpeg_bitstream_filters);
    
    $ffmpeg_filters = $ffmpeg->getFilters();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getFilters()', $ffmpeg_filters);
    
    $ffmpeg_protocols = $ffmpeg->getProtocols();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getProtocols()', $ffmpeg_protocols);
    
    $ffmpeg_pixel_formats = $ffmpeg->getPixelFormats();
    \PHPVideoToolkit\Trace::vars('$ffmpeg->getPixelFormats()', $ffmpeg_pixel_formats);
    
