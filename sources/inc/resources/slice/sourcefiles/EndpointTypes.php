<?php
// **********************************************************************
//
// Copyright (c) 2003-2011 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.4.2
//
// <auto-generated>
//
// Generated from file `EndpointTypes.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


if(!class_exists('Ice_EndpointSelectionType'))
{
    class Ice_EndpointSelectionType
    {
        const Random = 0;
        const Ordered = 1;
    }

    $Ice__t_EndpointSelectionType = IcePHP_defineEnum('::Ice::EndpointSelectionType', array('Random', 'Ordered'));
}
?>
