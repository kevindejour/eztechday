<?php

namespace Ez\dashboardtabBundle\Tab\Dashboard\Everyone;

use EzSystems\EzPlatformAdminUi\Tab\AbstractTab;

class NewTab extends AbstractTab
{
    public function getIdentifier(): string
    {
        return 'newtab';
    }

    public function getName(): string
    {
        return 'Nouvelle Table';
    }

    public function getOrder(): int
    {
        return 300;
    }

    public function renderView(array $parameters): string
    {

        return $this->twig->render('@Ezdashboardtab/tab/newtab.html.twig', [
            'variable' => "ceci est une variable",
        ]);
    }
}