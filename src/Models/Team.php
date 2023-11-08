<?php

namespace Devfest\Models;

class Team
{
    private String $name;
    private array $social;

    public function __construct($name, $social)
    {
        $this->name = $name;
        $this->social = $social;
    }

    /**
     * @return String $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array $social
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * @return mixed|null
     */
    public function getGithub()
    {
        return $this->social['github'] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getLinkedin()
    {
        return $this->social['linkedin'] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getTwitter()
    {
        return $this->social['twitter'] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getInstagram()
    {
        return $this->social['instagram'] ?? null;
    }


    public function generateHTML()
    {
        $name = htmlspecialchars($this->name, ENT_QUOTES, 'UTF-8');
        $nameLower = strtolower($name);
        $isSocial = $this->social !== null;
        $isGithub = $this->getGithub() !== null;
        $isLinkedIn = $this->getLinkedin() !== null;
        $isTwitter = $this->getTwitter() !== null;
        $isInstagram = $this->getInstagram() !== null;
        $github = $this->getGithub();
        $linkedin = $this->getLinkedin();
        $twitter = $this->getTwitter();
        $instagram = $this->getInstagram();


        return <<<HTML
<div class="col-lg-3 col-md-4 col-sm-6 mt-3">
    <div class="blog-wrap flex-container">
        <div class="flex-grow">
            <img class="pro-img" src="./img/team/members/{$nameLower}.jpg" alt="{$name}">
            <p class="px-4 pt-4 mb-1"><small></small></p>
        </div>
        <a href="#"><h6 class="px-4 mb-3">{$name}</h6></a>
        <h6 class="px-4 mb-3">
            <?php if ($isSocial): ?>
                <?php if ($isGithub): ?>
                    <a href="{$github}" target="_blank">
                            <i class="bi bi-github mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </i>
                    </a>
                <?php endif; ?>
                <?php if ($isLinkedIn): ?>
                    <a href="{$linkedin}" target="_blank">
                        <i class="bi bi-linkedin mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 x="0px" y="0px"
                                 fill="currentColor"
                                 class="bi bi-linkedin"
                                 width="20" height="20"
                                 viewBox="0 0 24 24">
                                <path d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z"></path>
                            </svg>
                        </i>
                    </a>
                <?php endif; ?>
                <?php if ($isTwitter): ?>
                    <a href="{$twitter}" target="_blank">
                            <i class="bi bi-twitter mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </i>
                    </a>
                <?php endif; ?>
                <?php if ($isInstagram): ?>
                    <a href="{$instagram}" target="_blank">
                        <i class="bi bi-instagram mr-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px"
                                    width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram"
                                    viewBox="0 0 50 50"
                            >
                                <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
                            </svg>
                        </i>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </h6>
    </div>
</div>
HTML;
    }
}