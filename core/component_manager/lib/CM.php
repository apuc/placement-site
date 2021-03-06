<?php

namespace core\component_manager\lib;


class CM
{
    public $service;

    /**
     * CM constructor.
     */
    public function __construct()
    {
        $this->service = new CmService();
    }

    /**
     * @param $slug
     * @return string|null
     */
    public function getVersion($slug)
    {
         return $this->service->getVersion($slug);
    }

    /**
     * @param $slug
     * @return array
     */
    public function getVersions($slug)
    {
        return $this->service->getVersions($slug);
    }

    /**
     * @return mixed
     */
    public function getAllVersions()
    {
        return $this->service->getAllVersions();
    }

    /**
     * @param string $slug
     * @return Component
     */
    public function getComponentInfo(string $slug): Component
    {
        return $this->service->getComponentInfo($slug);
    }

    /**
     * @return array
     */
    public function getComponentsInfo()
    {
        return $this->service->getComponentsInfo();
    }

    /**
     * @param $status
     * @return array
     */
    public function getByStatus($status)
    {
        return $this->service->getByStatus($status);
    }

    /**
     * @param string $slug
     * @return string
     */
    public function download(string $slug)
    {
        return $this->service->download($slug);
    }

    /**
     * @param string $slug
     * @param array $data
     * @return bool
     */
    public function save(string $slug, array $data)
    {
        return $this->service->save($slug, $data);
    }

    /**
     * @param string $slug
     * @return bool
     */
    public function modDeleteFromJson(string $slug)
    {
        return $this->service->modDeleteFromJson($slug);
    }

    /**
     * @param string $slug
     * @return bool
     */
    public function modChangeStatusToActive(string $slug)
    {
        return $this->service->modChangeStatusToActive($slug);
    }

    /**
     * @param string $slug
     * @return bool
     */
    public function modChangeStatusToInactive(string $slug)
    {
        return $this->service->modChangeStatusToInactive($slug);
    }

    /**
     * @param string $slug
     * @param array $data
     * @return bool
     */
    public function modChangeStatus(string $slug, array $data)
    {
        return $this->service->modChangeStatus($slug, $data);
    }

    /**
     * @param string $slug
     * @param array $data
     * @return bool
     */
    public function modChangeVersion(string $slug, array $data)
    {
        return $this->service->modChangeVersion($slug, $data);
    }

    /**
     * @param string $slug
     * @return bool
     */
    public function checkVersion(string $slug)
    {
        return $this->service->checkVersion($slug);
    }

    /**
     * @param string $slug
     * @return bool
     */
    public function isInstalled(string $slug)
    {
        return $this->service->isInstalled($slug);
    }

    /**
     * @param string $slug
     * @return bool
     */
    public function updateCurrentVersion(string $slug)
    {
        return $this->service->updateCurrentVersion($slug);
    }

    /**
     * @param string $slug
     * @return bool
     */
    public function getIsInstalled(string $slug)
    {
        return $this->service->getIsInstalled($slug);
    }

    /**
     * @param string $slug
     * @return array
     */
    public function getLocMod(string $slug)
    {
        return $this->service->getLocMod($slug);
    }

    public function deleteMod(string $slug)
    {
        return $this->service->deleteMod($slug);
    }
}