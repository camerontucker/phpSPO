<?php

/**
 * Updated By PHP Office365 Generator 2019-11-16T20:26:56+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint\Publishing;

use Office365\PHP\Client\Runtime\DeleteEntityQuery;
use Office365\PHP\Client\Runtime\UpdateEntityQuery;
use Office365\PHP\Client\Runtime\ClientObject;
use Office365\PHP\Client\Runtime\HttpMethod;
use Office365\PHP\Client\Runtime\Utilities\RequestOptions;
use Office365\PHP\Client\SharePoint\ClientContext;

class VideoItem extends ClientObject
{
    public function update()
    {
        $qry = new UpdateEntityQuery($this);
        $this->getContext()->addQuery($qry);
    }
    public function deleteObject()
    {
        $qry = new DeleteEntityQuery($this);
        $this->getContext()->addQuery($qry);
    }
    /**
     * @param $content
     * @throws \Exception
     */
    public function saveBinaryStream($content)
    {
        $ctx = $this->getContext();
        $methodName = "GetFile()/SaveBinaryStream";
        $requestUrl = $this->getResourceUrl() . "/" . $methodName;
        $request = new RequestOptions($requestUrl);
        $request->Method = HttpMethod::Post;
        $request->Data = $content;
        if ($ctx instanceof ClientContext) {
            $ctx->ensureFormDigest($request);
        }
        $request->TransferEncodingChunkedAllowed = true;
        $ctx->executeQueryDirect($request);
    }
    function setProperty($name, $value, $serializable = true)
    {
        if ($name == "ID") {
            if (is_null($this->getResourcePath())) {
                $this->setResourceUrl($this->parentCollection->getResourcePath()->toUrl() . "(guid'{$value}')");
            }
            $this->{$name} = $value;
        }
        parent::setProperty($name, $value, $serializable);
    }
    public function getTypeName()
    {
        return implode(".", array("SP", "Publishing", parent::getTypeName()));
    }
    /**
     * @return string
     */
    public function getChannelID()
    {
        if (!$this->isPropertyAvailable("ChannelID")) {
            return null;
        }
        return $this->getProperty("ChannelID");
    }
    /**
     * @var string
     */
    public function setChannelID($value)
    {
        $this->setProperty("ChannelID", $value, true);
    }
    /**
     * @return string
     */
    public function getCreatedDate()
    {
        if (!$this->isPropertyAvailable("CreatedDate")) {
            return null;
        }
        return $this->getProperty("CreatedDate");
    }
    /**
     * @var string
     */
    public function setCreatedDate($value)
    {
        $this->setProperty("CreatedDate", $value, true);
    }
    /**
     * @return string
     */
    public function getDefaultEmbedCode()
    {
        if (!$this->isPropertyAvailable("DefaultEmbedCode")) {
            return null;
        }
        return $this->getProperty("DefaultEmbedCode");
    }
    /**
     * @var string
     */
    public function setDefaultEmbedCode($value)
    {
        $this->setProperty("DefaultEmbedCode", $value, true);
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return string
     */
    public function getDisplayFormUrl()
    {
        if (!$this->isPropertyAvailable("DisplayFormUrl")) {
            return null;
        }
        return $this->getProperty("DisplayFormUrl");
    }
    /**
     * @var string
     */
    public function setDisplayFormUrl($value)
    {
        $this->setProperty("DisplayFormUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getFileName()
    {
        if (!$this->isPropertyAvailable("FileName")) {
            return null;
        }
        return $this->getProperty("FileName");
    }
    /**
     * @var string
     */
    public function setFileName($value)
    {
        $this->setProperty("FileName", $value, true);
    }
    /**
     * @return string
     */
    public function getOwnerName()
    {
        if (!$this->isPropertyAvailable("OwnerName")) {
            return null;
        }
        return $this->getProperty("OwnerName");
    }
    /**
     * @var string
     */
    public function setOwnerName($value)
    {
        $this->setProperty("OwnerName", $value, true);
    }
    /**
     * @return string
     */
    public function getPlayerPageUrl()
    {
        if (!$this->isPropertyAvailable("PlayerPageUrl")) {
            return null;
        }
        return $this->getProperty("PlayerPageUrl");
    }
    /**
     * @var string
     */
    public function setPlayerPageUrl($value)
    {
        $this->setProperty("PlayerPageUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getServerRelativeUrl()
    {
        if (!$this->isPropertyAvailable("ServerRelativeUrl")) {
            return null;
        }
        return $this->getProperty("ServerRelativeUrl");
    }
    /**
     * @var string
     */
    public function setServerRelativeUrl($value)
    {
        $this->setProperty("ServerRelativeUrl", $value, true);
    }
    /**
     * @return integer
     */
    public function getThumbnailSelection()
    {
        if (!$this->isPropertyAvailable("ThumbnailSelection")) {
            return null;
        }
        return $this->getProperty("ThumbnailSelection");
    }
    /**
     * @var integer
     */
    public function setThumbnailSelection($value)
    {
        $this->setProperty("ThumbnailSelection", $value, true);
    }
    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        if (!$this->isPropertyAvailable("ThumbnailUrl")) {
            return null;
        }
        return $this->getProperty("ThumbnailUrl");
    }
    /**
     * @var string
     */
    public function setThumbnailUrl($value)
    {
        $this->setProperty("ThumbnailUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * @return string
     */
    public function getID()
    {
        if (!$this->isPropertyAvailable("ID")) {
            return null;
        }
        return $this->getProperty("ID");
    }
    /**
     * @var string
     */
    public function setID($value)
    {
        $this->setProperty("ID", $value, true);
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * @return string
     */
    public function getVideoDownloadUrl()
    {
        if (!$this->isPropertyAvailable("VideoDownloadUrl")) {
            return null;
        }
        return $this->getProperty("VideoDownloadUrl");
    }
    /**
     * @var string
     */
    public function setVideoDownloadUrl($value)
    {
        $this->setProperty("VideoDownloadUrl", $value, true);
    }
    /**
     * @return integer
     */
    public function getVideoDurationInSeconds()
    {
        if (!$this->isPropertyAvailable("VideoDurationInSeconds")) {
            return null;
        }
        return $this->getProperty("VideoDurationInSeconds");
    }
    /**
     * @var integer
     */
    public function setVideoDurationInSeconds($value)
    {
        $this->setProperty("VideoDurationInSeconds", $value, true);
    }
    /**
     * @return integer
     */
    public function getVideoProcessingStatus()
    {
        if (!$this->isPropertyAvailable("VideoProcessingStatus")) {
            return null;
        }
        return $this->getProperty("VideoProcessingStatus");
    }
    /**
     * @var integer
     */
    public function setVideoProcessingStatus($value)
    {
        $this->setProperty("VideoProcessingStatus", $value, true);
    }
    /**
     * @return integer
     */
    public function getViewCount()
    {
        if (!$this->isPropertyAvailable("ViewCount")) {
            return null;
        }
        return $this->getProperty("ViewCount");
    }
    /**
     * @var integer
     */
    public function setViewCount($value)
    {
        $this->setProperty("ViewCount", $value, true);
    }
    /**
     * @return string
     */
    public function getYammerObjectUrl()
    {
        if (!$this->isPropertyAvailable("YammerObjectUrl")) {
            return null;
        }
        return $this->getProperty("YammerObjectUrl");
    }
    /**
     * @var string
     */
    public function setYammerObjectUrl($value)
    {
        $this->setProperty("YammerObjectUrl", $value, true);
    }
}